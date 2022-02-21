<?php

namespace App\Http\Middleware;

use App\Models\Course;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $courses = $user->courses;
        $course_id = intval( $request->route('id1') );
        $currentCourse = Course::find($course_id);

        $user_in_course = 0;

        foreach( $courses as $course ){
            if($course_id == $course->id)
            {
                $user_in_course = 1;
                break;
            }
        }
        if($user_in_course || $currentCourse->teacher->id == $user->id){
            return $next($request);
        }else{
            session()->flash('NotEnterLesson', 'شما ابتدا باید در دوره ثبت نام کنید.');
            return redirect()->route('education.showcourse', ['id' => $course_id]);
        }
    }
}
