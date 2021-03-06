<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'time', 'total_mark', 'heading_id'];


    public function heading()
    {
        return $this->belongsTo(Heading::class,'heading_id', 'id');
    }
    public function teacher(){
        return $this->belongsTo(Course::class,'heading_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id', 'id');
    }
}
