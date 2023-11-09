<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function show(Answer $answer)
    {
        return view('questions/show')->with(['Answers' => $answer->get()]);

    }
    public function store(Request $request)
{
  $model = new Answer();
  $model->answer = $request->input('answer');
  $model->question_id = $request->input('question_id');
  $model->user_id = Auth::id();
  $model->save();

  return redirect('/answers', $answer->id);
}
}
