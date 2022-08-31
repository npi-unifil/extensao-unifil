<?php

namespace App\Http\Controllers;

use App\Models\Courses;


use Illuminate\Http\Request;

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
        return view('course-page', ['course'=>$course]);
    }

}

