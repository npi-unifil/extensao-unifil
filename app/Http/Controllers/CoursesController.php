<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\students;
use App\Models\Projects;


use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    public function CoursePage(){
        return view('course-registration');
    }

    public function  storeCourse(Request $request)
    {
        $courses = new Courses;
        $courses->courseName = $request->courseName;
        $courses->courseYear = $request->courseYear;
        $courses->save();
        return redirect('courses')->with('status', 'Activity Post has been inserted');
    }

    function courseList(){
        $courses = Courses::all();
        return view('courses', ['courses'=>$courses]);
    }

    function courseId($id){
        $course = Courses::select("*")->where('id', '=', $id)->get()->first();
        $students = Students::select("*")->where('course_id', '=', $id)->sortable('studentName')->get();
        $projects = Projects::all();
        return view('course-page', ['course'=>$course, 'students'=>$students, 'projects'=>$projects]);
    }

    function deleteCourse($id){
        $course=Courses::find($id);
        $course->delete();
            return redirect()-> back();
    }

}

