<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    //
    public function getList(){
        $quests = Question::get();
        $q = Question::find(1);
      //  print_r($q->answer()->get("text"));
        return view("admin.quests.list",['quests'=>$quests]);
    }
    public function getListCategory($category){
        $quests = Question::where("category",$category)->get();
        //$q = Question::find(1);
      //  print_r($q->answer()->get("text"));
        return view("admin.quests.list",['quests'=>$quests]);
    }
    
    public function create(){
        
        return view("admin.quests.create");
    }
    public function view(Request $request, $id){
        $quests = Question::where('id',$id)->first();
        return view("admin.quests.view",['q'=>$quests]);
    }
    public function save(Request $request, $id){

       // dd($id);
       if($request->id !== 'new'){
           $q = Question::find($id);
           $q->text = $request->input("text");
           $q->active = $request->input("active");
           $q->category = $request->input("category");
           $answers = $request->input('answer');
           $q->questionsRating = $request->input("questionsRating");
           $this->saveAnswers($request,$answers,$id);
           $q->save();
        } else {
            $q = new Question();
            print_r($request->input());
            $q->text = $request->input("text");
            $q->active = $request->input("active");
            $q->category = $request->input("category");
            
            // $q->answer1 = $request->input("answer1");
            // $q->answer2 = $request->input("answer2");
            // $q->answer3 = $request->input("answer3");
            // $q->answer4 = $request->input("answer4");
            //$q->correctAnswer = $request->input("correctAnswer");
            $q->questionsRating     = $request->input("questionsRating");
            $q->save();
            $answers = $request->input('answer');
            $this->saveAnswers($request,$answers,$q->id);
        }
        return redirect(route('home'));
        
        
    }
    public function destroy(Request $request, $id){
        Question::destroy($id);
        return redirect(route('home'));
    }
    
    public function saveAnswers(Request $request,$answers,$question){
        Answer::where('question',$question)->delete();
        foreach($answers as $k=>$a){
            $answer = new Answer();
            $answer->question = $question;
            // print_r($request->input('answer'));
            // print_r($request->input('correctAnswer'));
            $answer->text = $a;
            $ca = $request->input('correctAnswer');
            echo "k=".$k.",ca[0]=".$ca[0]."<br>";
            if($ca[0] == $k+1){
                $answer->correct = 1;
            } else {
                $answer->correct = 0;
            }
            $answer->save();
        }
    }
}
