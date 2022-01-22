<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Video;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class SpeechesShowComponent extends Component
{
    use AuthorizesRequests;

    public $day;
    public $days = [
        "day1" => "شنبه",
        'day2' => "یکشنبه",
        'day3' => "دوشنبه",
        'day4' => "سه شنبه",
        'day5' => "چهارشنبه",
        'day6' => "پنج شنبه",
        'day7' => "جمعه",
    ];

    public function mount($day){
        $this->day = $day;
    }

    public function delete($id, $type)
    {

        if($type == "content"){
            $content = Content::find($id);

            $this->authorize('delete', $content);

            $path = public_path('/assets/images/speeches') . '/' . $content->image;
            unlink($path);
            $name = "مطلب";
            $content->delete();
        }
        else if( $type == "video" ){
            $video = Video::find($id);
            $name = "ویدیو";
            $video->delete();
        }

        session()->flash('message', "$name مورد نظر با موفقیت حذف گردید !!!");
    }

    public function render()
    {
        $contents = Content::where('day_of_speech',$this->day)->OrderBy('created_at','desc')->paginate(12);
        return view('livewire.speeches-show-component',[
            "contents" => $contents
        ])->layout('layouts.base');
    }
}
