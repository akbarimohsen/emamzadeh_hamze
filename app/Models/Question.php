<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['question' , 'answer1' , 'answer2' , 'answer3' , 'answer4', 'real_answer' , 'contest_id', 'is_quiz', 'quiz_id' ];



    public function contest()
    {
        return $this->belongsTo(Content::class);
    }
}
