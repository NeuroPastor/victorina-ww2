<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    public $timestamps = false;
    
    public function question(){
        return $this->hasMany('App\Question','id','answerId');
    }
}
