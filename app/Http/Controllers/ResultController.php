<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use App\Question;


class ResultController extends Controller
{
    //
    public function showResult($member){
        $member = Member::where("id","=",$member)->first();
        $totalRating = Question::where("active",1)->sum('questionsRating');
        return view("front.result",['member'=>$member,"totalRating"=>$totalRating]);
        
    }
}
