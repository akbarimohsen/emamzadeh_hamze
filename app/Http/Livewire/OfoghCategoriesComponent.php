<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Content;
use Livewire\Component;

class OfoghCategoriesComponent extends Component
{

    public $category_id;

    public function mount($category_id)
    {
        $this->category_id = $category_id;
    }
    public function render()
    {
        $contents = Category::find($this->category_id)->contents()->paginate(9);
        $category = Category::find($this->category_id);
        $categories = Category::all();
        return view('livewire.ofogh-categories-component',[
            'contents' => $contents,
            'category' => $category,
            'categories' => $categories
        ])->layout('layouts.base');
    }
}
