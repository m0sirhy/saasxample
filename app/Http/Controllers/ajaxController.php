<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajaxController extends Controller
{
    //
    function index()
    {
     return view('aja');
    }
    function action(Request $request)
    {
   
      $image = $request->file('select_file');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success'
      ]);
     
    
    }
}
