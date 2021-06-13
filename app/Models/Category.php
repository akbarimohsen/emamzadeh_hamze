<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'title' ];

    public function contents()
    {
        return $this->belongsToMany(Content::class,'category_content' , 'category_id' ,'content_id');
    }

    public function hekmats()
    {
        return $this->belongsToMany(Hekmat::class , 'hekmat_category' , 'category_id' , 'hekmat_id');
    }
}
