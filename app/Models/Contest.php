<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'short_description' , 'description' , 'start' , 'end' , 'time', 'image'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_contest', 'contest_id' , 'user_id');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'comment_contest', 'contest_id', 'comment_id');
    }
}
