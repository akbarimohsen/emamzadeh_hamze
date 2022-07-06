<?php

namespace App\Http\Livewire;

use App\Models\QuranCard;
use App\Models\QuranCategory;
use Livewire\Component;

class QuranMemorizationComponent extends Component
{
    public $category_id;

    public function mount()
    {
        $this->category_id = null;
    }

    public function setCategory($category_id){
        $this->category_id = $category_id;
    }

    public function render()
    {
        if( $this->category_id == null ){
            $cards = QuranCard::paginate(12);
            $current_category = null;
        }else{
            $cards = QuranCard::where('category_id', $this->category_id)->paginate(12);
            $current_category = QuranCategory::find($this->category_id);
        }

        $categories = QuranCategory::all();

        return view('livewire.quran-memorization-component',[
            'cards' => $cards,
            'categories' => $categories,
            'current_category' => $current_category
        ])->layout('layouts.base');
    }
}
