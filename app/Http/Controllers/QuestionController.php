<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function storeQuestion($slug){
        if(isset($_POST['question']))
        {
            session()->put($_POST['question_id'], [$_POST['question'], $_POST['answer']]);
        }

        $count = Question::all()->count();

         if ($slug > $count) {
             return redirect()->route('result');
        }

        $question = Question::where('id', $slug)->firstOrFail();
        return view('testing.test', compact('question', 'count'));
    }


    public function result(){
        $count = Question::all()->count();
        return view('testing.result', compact('count'));
    }


    public function clear(){
        $count = Question::all()->count();
        for($i = 0; $i<$count+1; $i++){
            session()->forget($i);
        }
        return view('testing.result');
    }
}
