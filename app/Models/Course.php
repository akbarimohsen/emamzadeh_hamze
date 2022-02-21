<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'short_description' , 'description', 'price', 'start_date', 'image', 'teacher_id'];

    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function headings(){
        return $this->hasMany(Heading::class, 'course_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class,'user_course', 'course_id' , 'user_id')->wherePivot('role', 'STD');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'comment_course', 'course_id', 'comment_id');
    }

}
