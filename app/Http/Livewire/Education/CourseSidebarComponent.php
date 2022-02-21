<?php

namespace App\Http\Livewire\Education;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class CourseSidebarComponent extends Component
{


    public $is_buy;
    public $course;

    public function mount($course)
    {
        $this->course = $course;

        if( !auth()->check() ){
            $is_buy = 0;
        }else{
            $user = Auth::user();
            $courses = $user->courses;
            $is_buy = 0;
            foreach($courses as $course){
                if($this->course->id == $course->id){
                    $is_buy = 1;
                }
            }
        }

        $this->is_buy = $is_buy;
    }

    public function addCart($course_id)
    {
        if (!auth()->check()) {
            session()->flash('AuthMessage', 'ابتدا وارد حساب کاربری خود شوید !!!');
        } else {
            $user = Auth::user();
            if( $user->id == $this->course->teacher->id ){
                return redirect()->route('education.showcourse', ['id' => $this->course->id]);
            }
            $this->order = Order::where('user_id', $user->id)->where('is_buy', 0)->latest()->first();
            if ($this->order) {
                $temp = DB::table('order_course')->where('course_id', $course_id)->where('order_id', $this->order->id)
                    ->exists();

                if ($temp) {
                    session()->flash("orderExist", 'این دوره قبلا در سبد خرید شما بوده است!!');
                } else {
                    $this->order->courses()->attach($course_id);
                    session()->flash('addCartMessage', 'دوره به سبد خرید شما اضافه گردید');
                }
            } else {
                $this->order = Order::create([
                    'is_buy' => 0,
                    'order_date' => Date::now(),
                    'user_id' => $user->id
                ]);
                $this->order->courses()->attach($course_id);
                session()->flash('addCartMessage', 'دوره به سبد خرید شما اضافه گردید');
            }
        }
    }

    public function render()
    {
        return view('livewire.education.course-sidebar-component')->layout('layouts.admin-base');
    }
}
