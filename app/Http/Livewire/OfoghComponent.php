<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class OfoghComponent extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public function mount()
    {

    }
    public function delete($content_id)
    {
        $content = Content::find($content_id);

        $this->authorize('delete', $content);

        $path = public_path('/assets/images/contents') . '/' . $content->image;
        unlink($path);

        $content->delete();

        session()->flash('message', "مطلب مورد نظر با موفقیت حذف گردید !!!");

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
