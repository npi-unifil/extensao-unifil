<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentsController extends Controller
{
    public function studentsPage(){
        return view('student-page');
}

public function  storeStudents(Request $request)
    {
        $student = new Student;
        $student->studentId = $request->studentId;
        $student->studentName = $request->studentName;
        $student->studentCourse = $request->studentCourse;
        $student->studentEmail = $request->studentEmail;
        $student->studentPeriod = $request->studentPeriod;
        $student->save();
        return redirect('courses')->with('status', 'Activity Post has been inserted');
    }
}
