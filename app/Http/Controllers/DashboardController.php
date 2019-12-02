<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    function index ()
    {
     //$course=Course::find(1)->student;
     $id=Auth::id();
     $Student = Student::where('user_id',$id)->get();
    //
    $course = Student::find()->course;

        return view('dashboard',compact('$Student'));
    }

}
