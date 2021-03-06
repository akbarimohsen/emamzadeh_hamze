<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class News extends Model
{
    use HasFactory;
    use HasTrixRichText;
    protected $fillable = ['title','short_description', 'description' , 'image'];

}
