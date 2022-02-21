<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'teacher_id', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function quizzes(){
        return $this->hasMany(Quiz::class);
    }
}
