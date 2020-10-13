<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    //
    public function getList(){
        $films = Film::all();
        if(count($films)==0){
            $films=null;
        }
        return view("admin.films.list",['films'=>$films]);

    }

    public function save(Request $request){

        print_r($request->input());
        $years = $request->input('year');
        $links = $request->input('link');
        $names = $request->input('name');
        foreach($names as $k=>$name){
            $film = Film::updateOrCreate(
                ['link'=>$links[$k],"year"=>$years[$k],"name"=>$name]
            );
            $film->save();
        }
        return redirect(route("films"));

    }
}
