<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function show(Answer $answer)
    {
        return view('answers/show')->with(['answer' => $answer]);

    }
    public function store(Request $request, Answer $answer)
    {
       $input = $request['answer'];
       $question->fill($input)->save();
       return redirect('/answers'.$answer->id);
    }
}
