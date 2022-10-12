<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\Courses;
use Illuminate\Support\Facades\Route;

class studentsController extends Controller
{

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
        // $students->project_id = Route::current()->parameters['id'];
        $students->course_id = Route::current()->parameters['id'];
        //$students->project_id = Route::current()->parameters['id'];
        $students->save();
        return redirect()->back()->with('status', 'Activity Post has been inserted');
    }
}
