<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory;
    protected $fillable = ['answer' , 'question_id' , 'user_id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function question()
    {
        return  $this->belongsTo(Question::class);
    }
}
