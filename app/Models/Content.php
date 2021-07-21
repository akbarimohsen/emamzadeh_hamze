<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'short_description' , 'description' , 'user_id' , 'image' ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_content','content_id' , 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'comment_content', 'content_id', 'comment_id');
    }
}
