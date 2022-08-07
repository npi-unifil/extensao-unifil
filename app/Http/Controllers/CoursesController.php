<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function showCourses(){
        $data = Post::all();
        return view('course-register', ['posts'=>$data]);
    }
}
