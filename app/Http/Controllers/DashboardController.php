<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;

use App\Course;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    function index ()
    {
     // dd( $url = Storage::url('2019-12-05-14-12-27_1.png'));

    $id= Auth::id();
     $Student = Student::where('user_id',$id)->get()->first();
     $course=Student::find($id)->Course;

   $im=  $Student->idimage;

        return view('template.Dashboard',compact('Student','course'));
    }

}
