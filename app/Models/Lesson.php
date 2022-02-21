<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'description', 'video', 'heading_id' ];

    public function heading(){
        return $this->belongsTo(Heading::class,'heading_id', 'id');
    }

    public function users(){
        return $this->belongsToMany(Lesson::class,'user_lesson', 'lesson_id' , 'user_id');
    }

    public function isRead($lesson_id  , $user_id){
        $readState = DB::table('user_lesson')->where('user_id', $user_id)->where('lesson_id', $lesson_id)->first();

        if($readState){
            return 1;
        }else{
            return 0;
        }
    }

}
