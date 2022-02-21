<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class LoginContest
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
        $contest_id = intval($request->route('contest_id'));
        $exist = $user->contests->where('id',"=",$contest_id)->first();

        if($exist != null)
        {
            session()->flash('middleware_message', 'شما قبلا یک بار وارد آزمون شده اید.');
            return redirect()->route('showContest' , ['contest_id' => $contest_id]);
        }
        else
        {
            return $next($request);
        }
    }
}
