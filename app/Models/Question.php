<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'title',
        'question',
        'hint',
        'model_answer',
    ]; 
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
