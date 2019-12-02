<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('fourm');
    }

    public function save(Request $request)
    {
        //   dd(  $request->hasFile('pimage'));
        $student = new Student();
       // $student->user_id = Auth::id();
        $student->user_id =1;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->phone = $request->phone;
        $student->birthdate = $request->birthdate;
        $student->enrollyear = $request->enrollyear;

        $student->address = $request->address;  
        //birth image   
        if ($request->hasFile('birimage')) {
            $file = $request->file('birimage'); //file src
            $imageName = $file->getClientOriginalName();
            $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
            $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads', $imageName);
            $student->birimage = $imageName;
          }
          //id image
          if ($request->hasFile('idimage')) {
            $file = $request->file('idimage'); //file src
            $imageName = $file->getClientOriginalName();
            $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
            $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads', $imageName);
            $student->idimage = $imageName;
          }
          //Personal image
          if ($request->hasFile('pimage')) {
            $file = $request->file('pimage'); //file src
            $imageName = $file->getClientOriginalName();
            $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
            $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads', $imageName);
            $student->pimage = $imageName;
          }
        $student->spec = $request->spec;
        $student->price = $request->price;
        $student->save();
        toast('Your Data as been submited!', 'success');
        return view('courseform');
    }

    public function payment(Request $request)
    {
        $student = App\student::find($request->id);
        $student->payment = $request->payment;
        $student->save();
    }

    public function drop(Request $RequestInput)
    {
        $file_src = $RequestInput->file("upload_file"); //file src
        $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads', $file_src);

        if ($is_file_uploaded) {
            return Redirect::back()->withErrors(['msg' => 'Succesfuly file uploaded to dropbox']);
        } else {
            return Redirect::back()->withErrors(['msg' => 'file failed to uploaded on dropbox']);
        }
    }
}
