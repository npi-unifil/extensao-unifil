<?php

namespace App\Http\Controllers;

use App\Models\Courses;


use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function courseList(){
        $courses = Courses::all();
        return view('course-register', ['courses'=>$courses]);
    }

    function coursePage(){
        $courses = Courses::all();
        return view('course-page', ['courses'=>$courses]);
    }
}

