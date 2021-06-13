<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Hekmat;
use Livewire\Component;
use Livewire\WithPagination;

class QuranAndHadisComponent extends Component
{
    use WithPagination;
    public $category_id;

    public function set_category($category_id)
    {
        $this->category_id = $category_id;
    }
    public function render()
    {
        if($this->category_id)
        {
            $hekmats = Category::find($this->category_id)->hekmats()->paginate(10);
        }else{
            $hekmats = Hekmat::paginate(10);
        }
        $categories = Category::where('title' , '=' , 'hekmat')->inRandomOrder()->limit(10)->get();
        return view('livewire.quran-and-hadis-component',[
            "categories" => $categories,
            'hekmats' => $hekmats
        ])->layout('layouts.base');
    }
}
