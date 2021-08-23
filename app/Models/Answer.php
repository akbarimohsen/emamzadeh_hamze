<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description' , 'confirm' , 'comment_id'];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
