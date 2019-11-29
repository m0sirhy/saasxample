<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function course()
    {
        return $this->hasMany('App\Course');
    }
    public function user()
    {
        return $this->belongsTo('App\User');   
    }
}
