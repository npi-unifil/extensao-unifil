<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CreateCourse extends Controller
{

    public function CoursePage(){
        return view('course-registration');
    }

    public function  storeCourse(Request $request)
    {
        $post = new Post;
        $post->courseName = $request->courseName;
        $post->courseYear = $request->courseYear;
        $post->save();
        return redirect('courses')->with('status', 'New Course Inserted');
    }
}
