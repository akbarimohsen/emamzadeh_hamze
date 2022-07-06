<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'phone',
        'is_confirm',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function contests()
    {
        return $this->belongsToMany(Contest::class,'user_contest', 'user_id' , 'contest_id');
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'user_course', 'user_id' , 'course_id')->wherePivot('role', 'STD');
    }

    public function teachingCourses(){
        return $this->belongsToMany(Course::class,'user_course', 'user_id' , 'course_id')->wherePivot('role', 'TCH');
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'user_quiz', 'user_id', 'quiz_id')->wherePivot('role', 'STD');
    }

    public function createdQuizzes()
    {
        return $this->belongsToMany(Quiz::class, 'user_quiz', 'user_id', 'quiz_id')->wherePivot('role', 'TCH');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function lessons(){
        return $this->belongsToMany(User::class,'user_lesson', 'user_id' , 'lesson_id');
    }

    public function twoFactorCode()
    {
        return $this->hasOne(TwofactorCode::class);
    }
}
