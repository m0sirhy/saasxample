<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //
    public function index(){
        return view('fourm');

    }
    public function save(Request $request){
   //   dd(  $request->hasFile('pimage'));
        $student =new Student();
$student ->fname=$request->fname;
$student ->lname=$request->lname;
$student ->phone=$request->phone;
$student ->birthdate=$request->birthdate;
$student ->enrollyear=$request->enrollyear;

$student ->address=$request->address;

if($request->hasFile('birimage')) {
    $file = $request->file('birimage'); 
    $imageName = $file->getClientOriginalName();
    $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
    $student->birimage = $imageName;
    $file->storeAs('public/', $imageName);}
    
 

    if($request->hasFile('idimage')) {
        $file = $request->file('idimage'); 
        $imageName = $file->getClientOriginalName();
        $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
        $student->idimage = $imageName;
        $file->storeAs('public/', $imageName);
    }else{}
    if($request->hasFile('pimage')) {
        $file = $request->file('pimage'); 
        $imageName = $file->getClientOriginalName();
        $imageName = date('Y-m-d-H-i-s').'_'.$imageName;
        $student->pimage = $imageName;
        $file->storeAs('public/', $imageName);
    }
$student ->spec=$request->spec;
$student ->price=$request->price;
$student->save();
$id=$student->id;
toast('Your Data as been submited!','success');
return view('courseform',compact('id'));

    }

    public function payment(Request $request){
        $student = App\student::find($request->id);
$student->payment = $request->payment ;
$student->save();
    }

    public function drop(Request $RequestInput){
        $file_src=$RequestInput->file("upload_file"); //file src
      $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads',$file_src);
       
      if($is_file_uploaded){
        return Redirect::back()->withErrors(['msg'=>'Succesfuly file uploaded to dropbox']);
      } else {
        return Redirect::back()->withErrors(['msg'=>'file failed to uploaded on dropbox']);
      } 
    }

}
