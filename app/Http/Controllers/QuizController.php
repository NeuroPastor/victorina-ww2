<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Member;
use App\Answer;
use App\Result;


class QuizController extends Controller
{
    public function list(){
        $questions = Question::where("active",1)->get();
        $q1941 = Question::where(["active"=>1,'category'=>1])->inRandomOrder()->limit(5)->get();
        $q1942 = Question::where(["active"=>1,'category'=>2])->inRandomOrder()->limit(5)->get();
        $q1943 = Question::where(["active"=>1,'category'=>3])->inRandomOrder()->limit(5)->get();
        $q1944 = Question::where(["active"=>1,'category'=>4])->inRandomOrder()->limit(5)->get();
        $q1945 = Question::where(["active"=>1,'category'=>5])->inRandomOrder()->limit(5)->get();

        return view("front.quiz", ['quests'=>$questions,'q1941'=>$q1941,'q1942'=>$q1942,'q1943'=>$q1943,'q1944'=>$q1944,'q1945'=>$q1945]);
    }

    public function quizSave(Request $request){

        $member = new Member();
        $member->fullname = $request->input("fullname")?$request->input("fullname"):'не указано';
        $member->school = $request->input("school")?$request->input("school"):'не указано';
        $member->classOfSchool = $request->input("classOfSchool")?$request->input("classOfSchool"):'не указано';
        $member->TeacherFullname = $request->input("TeacherFullname")?$request->input("TeacherFullname"):'не указано';
        $member->birthDate = $request->input("birthDate")?$request->input("birthDate"):'не указано';
        $member->codeword = $request->input("codeword")?$request->input("codeword"):'не указано';
        $member->greeting = $request->input("greeting")?$request->input("greeting"):'не указано';
        $member->timestart = $request->timestart?$request->timestart:time();
        $member->timeend = time();
        $member->rating = 0;
        $member->save();
        $memberId = $member->id;
        $questions = Question::get();
        foreach($questions as $q){
            $result = new Result();
            if($request->input("question_".$q->id) !== null){
                $answer = Answer::where("text","LIKE", $request->input("question_".$q->id))->where("question","=",$q->id)->first();
                $result->memberId = $memberId;
                $result->answerId = $q->id;
                $result->answer = $request->input("question_".$q->id);
                $result->isCorrect = $answer->correct;
                $result->answerRating = $q->questionsRating;
                $result->save();
                if($answer->correct == 1){
                    Member::find($memberId)->increment("rating",$q->questionsRating);
                }
            }
        }
        //$rating = Member::find($memberId);
       // echo Member::find($memberId)->rating;
        $questions = Question::where("active",1)->sum('questionsRating');
        
        return redirect(route("result",["member"=>$memberId]));
        //print_r($request->input());
    }

    
}
