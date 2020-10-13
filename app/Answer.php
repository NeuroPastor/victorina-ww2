<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    public $timestamps = false; // или можно указать что мы вообще не используем поля created_at и updated_at
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
