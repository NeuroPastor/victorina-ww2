<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;


class UploadimageController extends Controller
{
    public function index()
    {
        return view('uploadfile');
    }
    public function uploadImage(Request $request)
    {
         // загрузка файла
        if ($request->isMethod('post') && $request->file('file')) {

            
            // $file = $request->file('file');
            // $upload_folder = 'public';
            // $filename = $file->getClientOriginalName(); // image.jpg
            
            
            //$path = Storage::putFile('public', $request->file('file'));
            $path = $request->file('file')->store('/uploads');
            //echo json_encode(["location"=>env('APP_URL').'/uploads/'.str_replace("/","",$path)]);
           // echo $path;
            return json_encode(["location"=>env('APP_URL')."/".$path]);

        }
    }
}
