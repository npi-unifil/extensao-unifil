<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\Courses;
use App\Models\Projects;
use Illuminate\Support\Facades\Route;

class studentsController extends Controller
{

    function studentPageView()
    {
        return view('student-page');
    }

    function studentsList()
    {
        $students = Students::all();
        return view('course-page', ['students' => $students]);
    }

    public function storestudents(Request $request)
    {
        $students = new Students;
        $students->studentName = $request->studentName;
        $students->studentEmail = $request->studentEmail;
        $students->matricula = $request->studentId;
        $students->project_id = $request->studentTeam;
        $students->course_id = Route::current()->parameters['id'];
        $students->save();
        return redirect()->back()->with('status', 'Activity Post has been inserted');
    }

    public function studentSendActivity()
    {
        return view('student-activity');
    }

    public function studentDelete($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect()->back();
    }

    function studentEdit($id)
    {
        $students = Students::find($id);
        $projects = Projects::all();
        return view('edit-student-page', ['student' => $students, 'projects' => $projects]);
    }

    function studentUpdate(Request $request, $id)
    {
        $request->validate([
            'studentName' => 'required',
            'studentEmail' => 'required',
            'matricula' => 'required',
            'studentTeam' => 'required'
        ]);
        $student = Students::findOrFail($id);
        // Getting values from the blade template form
        $student->studentName =  $request['studentName'];
        $student->studentEmail = $request['studentEmail'];
        $student->matricula = $request['matricula'];
        //Trocar todos os get pela notação abaixo
        $student->project_id = $request['studentTeam'];

        $student->save();

        return redirect(route('courseId', $student->course->id));
    }


    public function projectPreview()
    {
        $projects = Projects::all();
        return view('project-list-page', ['projects' => $projects]);
    }
}
