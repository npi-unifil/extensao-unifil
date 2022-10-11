<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentArea extends Controller
{

    function studentPageView(){
        return view('student-page');
    }
}
