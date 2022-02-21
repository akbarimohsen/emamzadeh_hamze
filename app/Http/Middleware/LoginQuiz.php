<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginQuiz
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
        $course_id = intval( $request->route('id1') );
        $heading_id = intval( $request->route('id2') );
        $quiz_id = intval($request->route('id3'));

        $exist = $user->quizzes->where('id', $quiz_id)->first();


        if($exist != null){
            session()->flash('middleware_message', 'شما قبلا یک بار وارد کوییز شده اید');
            return redirect()->route('education.quizDetail', ['id1' => $course_id, 'id2' => $heading_id, 'id3' => $quiz_id]);
        }else{
            return $next($request);
        }

    }
}
