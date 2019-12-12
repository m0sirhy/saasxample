<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request; 
use App\Course;

class CourseController extends Controller
{
    //
    public function index(){
return view('template.CForm');
    }

    public function save(Request $request)
    {
     $course=new Course();
     $course->name=$request->name;
     $course->student_id=Auth::id();
     $course->hours=$request->hours;
     $course->instractor=$request->instractor;
     $course->semester=$request->semester;
     $course->year=$request->year;

     $course->grade=$request->grade;
     $course->save();
     toast('Your Course Data as been submited!', 'success');

     return redirect('/dashboard');
    }
}
