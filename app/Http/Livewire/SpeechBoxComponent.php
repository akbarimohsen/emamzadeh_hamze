<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Video;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class SpeechBoxComponent extends Component
{

    use AuthorizesRequests;


    public $day;
    public function mount($day)
    {
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
        $contents = Content::where('day_of_speech',$this->day)->OrderBy('created_at','desc')->take(2)->get();
        $videos = Video::where('day_of_speech', $this->day)->OrderBy('created_at', 'desc')->take(2)->get();

        return view('livewire.speech-box-component',[
            'contents' => $contents,
            'videos' => $videos
        ])->layout('layouts.admin-base');
    }
}
