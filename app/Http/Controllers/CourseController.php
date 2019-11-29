<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Course;

class CourseController extends Controller
{
    //
    public function index(){

    }

    public function save(Request $request)
    {
     $course=new Course();
     $course->name=$request->name;
     $course->student_id=$request->student_id;
     $course->hours=$request->hours;
     $course->instractor=$request->instractor;
     $course->grade=$request->grade;
     $course->save();
    }
}
