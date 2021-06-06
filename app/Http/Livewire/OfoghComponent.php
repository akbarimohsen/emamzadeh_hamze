<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class OfoghComponent extends Component
{
    use WithPagination;

    public function mount()
    {

    }
    public function render()
    {

        $contents = Content::paginate(9);
            // $contents = DB::table('contents')->join('category_content' , 'contents.id' ,'=','content_id')
            // ->join('categories' , 'category_content.category_id', '=' , 'categories.id')
            // ->select('contents.*')->where('categories.id' , '=' , $this->category_id)
            // ->paginate(9);
        return view('livewire.ofogh-component',[
            'contents' => $contents
        ])->layout('layouts.base');
    }
}
