<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{
    public $new_id;
    public function mount($id)
    {
        $this->new_id = $id;
    }


    public function render()
    {
        $news = News::find($this->new_id);
        return view('livewire.news-component',[
            'news' => $news
        ])->layout('layouts.base');
    }
}
