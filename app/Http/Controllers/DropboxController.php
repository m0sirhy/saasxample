<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropboxController extends Controller
{
    //
    public function uploadToDropbox(){
        return View::make('dropbox');
}
}
