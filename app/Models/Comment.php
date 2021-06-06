<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'user_name' , 'description' , 'email', 'confirm' , 'content_id'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
