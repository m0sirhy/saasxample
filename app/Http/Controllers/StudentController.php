<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('template.SForm');
    }

    public function save(Request $request)
    {
     
        $student = new Student();
        $student->user_id = Auth::id();
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
            $is_file_uploaded_local = $file->storeAs(
              'public',$imageName);
            $is_file_uploaded = $file->storeAs(
                'public',$imageName, 'dropbox'
            );
            $student->birimage = $imageName;

          }
          //id image
          if ($request->hasFile('idimage')) {
            $file = $request->file('idimage'); //file src
            $imageName = $file->getClientOriginalName();
            $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
           // $is_file_uploaded = Storage::disk('dropbox')->storeAs('imageName')->put('public-uploads', $imageName);
           $is_file_uploaded_local = $file->storeAs(
            'public',$imageName);
           $is_file_uploaded = $file->storeAs(
            'public',$imageName, 'dropbox'
        );
        $student->idimage = $imageName;

        
          }
          //Personal image
          if ($request->hasFile('pimage')) {
            $file = $request->file('pimage'); //file src
            $imageName = $file->getClientOriginalName();
            $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
         $is_file_uploaded_local = $file->storeAs(
          'public',$imageName);
         $is_file_uploaded = $file->storeAs(
            'public',$imageName, 'dropbox'
        );
        $student->pimage = $imageName;
 

          }

        $student->spec = $request->spec;
        $student->price = $request->price;
        $student->save();
        toast('Your Data as been submited!', 'success');
       

        return view('template.CForm');
    }

    public function payment(Request $request)
    {
      $student = Student::find(Auth::id());
$balnce=$student->payment;
$balnce+=$request->payment;



      $student->payment = $balnce;
        $student->save();
        toast('Payment Success Please Check Your Balance', 'success');
        return redirect('/dashboard');

    }

}
