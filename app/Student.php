<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = []; 
    public $timestamps = false;

    public function courses(){
        return $this->belongsToMany('App\Course');
    }
}
