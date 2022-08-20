<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CreateCourse extends Controller
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
}
