<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use App\Models\News;
use App\Models\Picture;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeComponent extends Component
{
    public function render()
    {
        SEOTools::opengraph()->addProperty('type', 'articles');
        $events = Event::orderBy('created_at','desc')->take(3)->get();
        $news = News::orderBy('created_at','desc')->take(3)->get();
        $pictures = Picture::orderBy('created_at','desc')->take(4)->get();
        return view('livewire.home-component',[
            "events" => $events,
            "news" => $news,
            "pictures" => $pictures
        ])->layout('layouts.base');
    }
}
