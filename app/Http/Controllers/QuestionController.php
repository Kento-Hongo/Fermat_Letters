<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    public function index(Question $question)
    {
        return view('questions.index')->with(['questions' => $question->getPaginateByLimit()]);
    }
    
    public function create()
{
    return view('questions.create');
}
    
    public function show(Question $question)
    {
        return view('questions.show')->with(['question' => $question]);
    }
    
    public function store(Request $request, QuestionRequest $question)
{
    $input = $request['question'];
    $question->fill($input)->save();
    return redirect('/questions/'.$question->id);
}
}
