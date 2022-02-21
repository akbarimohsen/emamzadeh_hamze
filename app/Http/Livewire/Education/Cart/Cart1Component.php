<?php

namespace App\Http\Livewire\Education\Cart;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Cart1Component extends Component
{
    public $order;

    public function mount($id)
    {
        $this->order = Order::find($id);
    }

    public function deleteCourse($course_id)
    {

        DB::table('order_course')->where('course_id', $course_id)->where('order_id', $this->order->id)
        ->delete();

        $temp = DB::table('order_course')->where('order_id', $this->order->id)->count();

        if($temp == 0)
        {
            Order::find($this->order->id)->delete();
            return redirect()->route('education.home');
        }

        session()->flash('deleteCourse', 'دوره از سبد خرید شما حذف گردید !!!');
    }

    public function render()
    {
        $total_price = 0;

        foreach($this->order->courses as $course){
            $total_price = $total_price + $course->price;
        }

        return view('livewire.education.cart.cart1-component',[
            'total_price' => $total_price
        ])->layout('layouts.education-base');
    }
}
