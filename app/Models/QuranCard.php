<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuranCard extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'ayeh', 'translation', 'picture', 'category_id'];

    public function category()
    {
        //
        return $this->belongsTo(QuranCategory::class, 'category_id');
    }
}
