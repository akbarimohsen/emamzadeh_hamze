<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'user_name' , 'description' , 'email', 'confirm'];

    public function contents()
    {
        return $this->belongsToMany(Content::class,'comment_content','comment_id','content_id');
    }

    public function contests()
    {
        return $this->belongsToMany(Contest::class,'comment_contest','comment_id','contest_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'comment_course', 'comment_id', 'course_id');
    }
}
