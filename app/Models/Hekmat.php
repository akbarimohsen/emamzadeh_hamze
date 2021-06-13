<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hekmat extends Model
{
    use HasFactory;
    public $fillable = ['header' , 'title' , 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class ,'hekmat_category' , 'hekmat_id' , 'category_id');
    }
}
