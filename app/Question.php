<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public $timestamps = false;
    public function getShortTextAttribute(){
        return mb_substr(strip_tags($this->text), 0, 500);
    }

    public function getStripTextAttribute(){
        return strip_tags(preg_replace(array("/(\/?\.\.){1,3}/",'/(style=("|\Z)(.*?)("|\Z))/'),"",$this->text),"<b><img><p>");
    }

    public function answer(){
        return $this->hasMany('App\Answer','question','id');
    }
    public function result(){
        return $this->belongsTo('App\Result', 'answerId');
    }
}
