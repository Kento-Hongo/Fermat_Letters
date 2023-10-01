<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class QuestionRequest extends FormRequest
{
   
     
    public function rules()
    {
        return [
            'question.title' => 'required|string|max:100',
            'question.question' => 'required|string|max:4000',
            'question.hint' => 'required|string|max:100',
            'question.model_answer' => 'required|string|max:4000',
        ];
    }
}
