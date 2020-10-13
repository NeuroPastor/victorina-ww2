<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Member;

class membersMake extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membersMake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $dir = dirname(dirname(dirname(__DIR__)))."/certs";
        $members = Member::get();
        foreach($members as $member){
            $schools[preg_replace("/[^0-9]/", '',$member->school)]=preg_replace("/[^0-9]/", '',$member->school);
        }
        $schools = array_unique($schools);
        sort($schools);
        print_r($schools );
        foreach($schools as $sc){
            if($sc === ''){
                $sc = 0;
            }
            $school = $sc;
            echo $school.PHP_EOL;
            mkdir($dir."/".$school);
        }
        echo "Генерация папок завершена".PHP_EOL;
        $count=0;
        foreach($members as $member){

            $count++;
            $font = $dir."/assets/arialbd.ttf"; // Ссылка на шрифт
            $font_size = 60; // Размер шрифта
            $degree = 0; // Угол поворота текста в градусах
            $y = 150; // Смещение сверху (координата y)
            // print_r($member->fullname);
            // return;
            $arr = array(
                $member->fullname,
                //$member->school,
                "Руководитель",
                $member->TeacherFullname
            );
            $school =  preg_replace("/[^0-9]/", '', $member->school);
            $img = imagecreatefromjpeg($dir."/assets/member.jpg"); // Ссылка на файл
            $bg = imagecreatefrompng( $dir."/assets/bg.png"); // Функция создания изображения
            foreach($arr as $k=>$a){
                
                $box = imagettfbbox($font_size, 0, $font, $a);
                $x = 860-($box[2]-$box[0])/2; //по оси x
                
                $color = imagecolorallocate($bg, 0, 0, 0); // Функция выделения цвета для текста
                
                imagettftext($bg, $font_size, $degree, $x, $y, $color, $font, $a); // Функция нанесения текста
                imagepng($bg, $dir."/planks/".str_replace(" ","_",$member->fullname)."_plank.png"); // Сохранение рисунка
                imagecopy($img,$bg,140,1480,0,0,1720,615);
                imagejpeg($img,$dir."/".$school."/".str_replace(" ","_",$member->fullname)."____".str_replace(" ","_",$member->TeacherFullname).".jpg");
                if($k==0){
                    $y = $y+90;
                }
                $y = $y+90;
            }
            echo $count.". Сертификат для: ".$member->fullname ." из школы ". $school." готов".PHP_EOL;
                imagedestroy($img); // Освобождение памяти и закрытие рисунка
                imagedestroy($bg); // Освобождение памяти и закрытие рисунка
        }
        return "Сгенерировано ".$x." сертификатов";
    }
}
