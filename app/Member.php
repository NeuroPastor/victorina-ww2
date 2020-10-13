<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public $timestamps = false;
    public function getTimeAttribute(){
        
        $seconds = $this->timeend - $this->timestart; // Количество исходных секунд
        $minutes = floor($seconds / 60); // Считаем минуты
        $hours = floor($minutes / 60); // Считаем количество полных часов
        $minutes = $minutes - ($hours * 60);  // Считаем количество оставшихся минут

        $seconds = $seconds % 60;
        $tmp = $this->timeend - $this->timestart;
        return $hours.':'.$minutes.':'.$seconds." ({$tmp} секунд)"; // Получаем время 1:40

        
    }
    public function result(){
        return $this->hasMany('App\Result','memberId','id');
    }
}
