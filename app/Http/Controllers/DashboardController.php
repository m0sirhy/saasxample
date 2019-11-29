<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
class DashboardController extends Controller
{
    //
    function index ()
    {
     //$course=Course::find(1)->student;
     $Student = Student::get();
        return view('dashboard');
    }

}
