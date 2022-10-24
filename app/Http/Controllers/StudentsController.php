<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\Courses;
use App\Models\Projects;
use Illuminate\Support\Facades\Route;

class studentsController extends Controller
{

    function studentPageView(){
        return view('student-page');
    }

function studentsList(){
    $students = Students::all();
    return view('course-page', ['students'=>$students]);
}

    public function  storestudents(Request $request)
        {
            $students = new Students;
            $students->studentName = $request->studentName;
            $students->studentEmail = $request->studentEmail;
            $students->matricula = $request->studentId;
            $students->project_id = $request->studentTeam;
            // $students->project_id = Route::current()->parameters['id'];
            $students->course_id = Route::current()->parameters['id'];
            $students->save();
            return redirect()->back()->with('status', 'Activity Post has been inserted');
        }

        public function studentSendActivity() {
        return view('student-activity');
        }

        public function studentDelete($id) {
            $students=Students::find($id);
            $students->delete();
            return redirect()-> back();
        }

        function studentEdit($id){
            $students=Students::find($id);
            return view('edit-student-page', ['student' => $students]);
        }

        function studentUpdate( Request $request, $id){
            $request->validate([
                'studentName'=>'required',
                'studentEmail'=>'required',
                'matricula'=>'required',
                'project_id'=>'required',

            ]);

            $students = Students::find($id);
            $projects = Projects::all();
            // Getting values from the blade template form
            $students->studentName =  $request->get('studentName');
            $students->studentEmail = $request->get('studentEmail');
            $students->matricula = $request->get('matricula');
            $students->project_id = $request->get('project_id');
            $students->save();

            return view('course-page', $students->course->id);
        }


    public function projectPreview(){
        $projects = Projects::all();
        return view('project-list-page', ['projects'=>$projects]);
    }
}
