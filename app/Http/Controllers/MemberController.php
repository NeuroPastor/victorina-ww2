<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Question;

class MemberController extends Controller
{
    //
    public function getList(){
        $members = Member::get();
        return view("admin.members.list",['members'=>$members]);
    }

    public function view($id){
        $member = Member::findOrFail($id);
        $questions = Question::get();
        foreach($questions as $q){
            $quest[$q->id] = $q->text;
        }
        return view("admin.members.view",['member'=>$member, 'quest'=>$quest]);
    }
    public function getListHideNoVideo(){
        $members = Member::where('greeting','LIKE','%http%')->get();
        return view("admin.members.list",['members'=>$members]); 
    }
    public function getListHideFalseCodeword(){ 
        $members = Member::whereRaw("LOWER(codeword) LIKE ?","родина")->get();
        return view("admin.members.list",['members'=>$members]);
    }
    public function getListHideFalseCodewordAndNoVideo(){
        $members = Member::where('greeting','LIKE','%http%')->whereRaw("LOWER(codeword) LIKE ?","родина")->orderBy('rating','DESC')->get();
        return view("admin.members.list",['members'=>$members]);
    }
    public function makeDirSchool($school){
         
    }
    public function generateOneCertMember(){
        $dir = dirname(dirname(dirname(__DIR__)))."/certs";
        $members = Member::get();
        $x=0;
        foreach($members as $member){
            $x++;
            $font = $dir."/assets/arialbd.ttf"; // Ссылка на шрифт
            $font_size = 60; // Размер шрифта
            $degree = 0; // Угол поворота текста в градусах
            $y = 120; // Смещение сверху (координата y)
            // print_r($member->fullname);
            // return;
            $arr = array(
                $member->fullname,
                $member->school,
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
                imagejpeg($img,$dir."/".$school."/".str_replace(" ","_",$member->fullname).".jpg");
                
                if($k==1){
                    $y = $y+90;
                }
                $y = $y+90;
            }
                imagedestroy($img); // Освобождение памяти и закрытие рисунка
                imagedestroy($bg); // Освобождение памяти и закрытие рисунка
        }
        return "Сгенерировано ".$x." сертификатов";
    }
public function generateOneCertWinner($id){
        $member = Member::where("id",$id)->first();
        $dir = dirname(dirname(dirname(__DIR__)))."/certs";
        $x=0;
        $font = $dir."/assets/arialbd.ttf"; // Ссылка на шрифт
        $font_size = 60; // Размер шрифта
        $degree = 0; // Угол поворота текста в градусах
        $y = 120; // Смещение сверху (координата y)
        // print_r($member->fullname);
        // return;
        $arr = array(
            $member->fullname,
            //$member->school,
            "Руководитель",
            $member->TeacherFullname
        );
        $school = (int)$member->school;
        $img = imagecreatefromjpeg($dir."/assets/winner.jpg"); // Ссылка на файл
        $bg = imagecreatefrompng( $dir."/assets/bg.png"); // Функция создания изображения
        foreach($arr as $k=>$a){
            
            $box = imagettfbbox($font_size, 0, $font, $a);
            $x = 860-($box[2]-$box[0])/2; //по оси x
            
            $color = imagecolorallocate($bg, 0, 0, 0); // Функция выделения цвета для текста
            
            imagettftext($bg, $font_size, $degree, $x, $y, $color, $font, $a); // Функция нанесения текста
            imagepng($bg, $dir."/planks/".str_replace(" ","_",$member->fullname)."_plank.png"); // Сохранение рисунка
            imagecopy($img,$bg,140,1480,0,0,1720,615);
            imagejpeg($img,$dir."/winners/".str_replace(" ","_",$member->fullname).".jpg");
            
            if($k==0){
                $y = $y+90;
            }
            $y = $y+90;
        }
            imagedestroy($img); // Освобождение памяти и закрытие рисунка
            imagedestroy($bg); // Освобождение памяти и закрытие рисунка
            $file = $dir."/winners/".str_replace(" ","_",$member->fullname).".jpg";
            if (file_exists($file)) {
                // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
                // если этого не сделать файл будет читаться в память полностью!
                if (ob_get_level()) {
                  ob_end_clean();
                }
                // заставляем браузер показать окно сохранения файла
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($file));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));
                // читаем файл и отправляем его пользователю
                readfile($file);
                exit;
              }
        
       

}
public function generateOneCertPrize($id){
    $member = Member::where("id",$id)->first();
    $dir = dirname(dirname(dirname(__DIR__)))."/certs";
    $x=0;
    $font = $dir."/assets/arialbd.ttf"; // Ссылка на шрифт
    $font_size = 60; // Размер шрифта
    $degree = 0; // Угол поворота текста в градусах
    $y = 120; // Смещение сверху (координата y)
    // print_r($member->fullname);
    // return;
    $arr = array(
        $member->fullname,
        //$member->school,
        "Руководитель",
        $member->TeacherFullname
    );
    $school = (int)$member->school;
    $img = imagecreatefromjpeg($dir."/assets/prize.jpg"); // Ссылка на файл
    $bg = imagecreatefrompng( $dir."/assets/bg.png"); // Функция создания изображения
    foreach($arr as $k=>$a){
        
        $box = imagettfbbox($font_size, 0, $font, $a);
        $x = 860-($box[2]-$box[0])/2; //по оси x
        
        $color = imagecolorallocate($bg, 0, 0, 0); // Функция выделения цвета для текста
        
        imagettftext($bg, $font_size, $degree, $x, $y, $color, $font, $a); // Функция нанесения текста
        imagepng($bg, $dir."/planks/".str_replace(" ","_",$member->fullname)."_plank.png"); // Сохранение рисунка
        imagecopy($img,$bg,140,1480,0,0,1720,615);
        imagejpeg($img,$dir."/prizes/".str_replace(" ","_",$member->fullname).".jpg");
        
        if($k==0){
            $y = $y+90;
        }
        $y = $y+90;
    }
        imagedestroy($img); // Освобождение памяти и закрытие рисунка
        imagedestroy($bg); // Освобождение памяти и закрытие рисунка
        $file = $dir."/prizes/".str_replace(" ","_",$member->fullname).".jpg";
        if (file_exists($file)) {
            // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
            // если этого не сделать файл будет читаться в память полностью!
            if (ob_get_level()) {
              ob_end_clean();
            }
            // заставляем браузер показать окно сохранения файла
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            // читаем файл и отправляем его пользователю
            readfile($file);
            exit;
          }
    
}
    
}
