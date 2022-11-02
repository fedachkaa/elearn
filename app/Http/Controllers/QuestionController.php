<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function storeQuestion($slug){
        session(['0'=>'0']);
        if(isset($_POST['skip_answer']))
        {
            session()->put($_POST['question_id'], [null, null]);
        }
        if(isset($_POST['user_answer']))
        {
            session()->put($_POST['question_id'], [$_POST['user_answer'], $_POST['correct_answer']]);
        }

        $count = Question::all()->count();

        if ($slug > $count) {
             return redirect()->route('result');
        }
        $question = Question::where('id', $slug)->firstOrFail();
        return view('testing.test', compact('question', 'count'));
    }


    public function result(){
        $correct_answers = 0;
        $count = Question::all()->count();
        if(session()->has(1)){
            for($i = 1; $i<=$count; $i++){
                if(session()->get($i)[0] != null && session()->get($i)[0] == session()->get($i)[1]){
                    $correct_answers+=1;
                }
            }
            $user = User::find(Auth::user()->id);
            $user->result = $correct_answers;
            $user->save();
        }
        if(isset($_GET['loadResult'])){
            $name = $user->name;
            $pdf = Pdf::loadView('testing.user_result_pdf', compact('count', 'correct_answers', 'name'));
            return $pdf->download('result.pdf');
        }
        return view('testing.result', compact('count', 'correct_answers'));
    }


    public function clear(){
        $count = Question::all()->count();
        for($i = 0; $i<$count+1; $i++){
            session()->forget($i);
        }
        $user = User::find(Auth::user()->id);
        $user->result = 0;
        $user->save();
        return view('testing.result');
    }
}
