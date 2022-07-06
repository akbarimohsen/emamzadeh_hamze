<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['is_buy', 'order_date', 'user_id', 'referenceID'];



    public function courses()
    {
        return $this->belongsToMany(Course::class, 'order_course', 'order_id', 'course_id');
    }

    public function client(){
        return $this->belongsTo( User::class , 'user_id');
    }


}
