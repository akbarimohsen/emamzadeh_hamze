<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Content;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdminEditContentComponent extends Component
{
    use WithFileUploads;

    public $content;

    public $title;
    public $short_description;
    public $description;
    public $category;
    public function mount($id)
    {
        $content = Content::find($id);

        $this->title = $content->title;
        $this->short_description = $content->short_description;
        $this->description = $content->description;
        $this->content = $content;

        $categories = $content->categories;

        foreach($categories as $category)
        {
            $content->categories()->detach($category->id);
        }
    }

    public function editContent()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'category' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;

        $content = $this->content;

        $content->title = $data['title'];
        $content->short_description = $data['short_description'];
        $content->description = $data['description'];

        foreach($data['category'] as $category_id)
        {
            $content->categories()->attach($category_id);
        }
        $content->save();
        session()->flash('message' , 'مطلب شما با موفقیت بروزرسانی شد !!!');
        return redirect()->route('ofogh.content' , ['id' => $content->id]);

    }
    public function render()
    {
        $categories = Category::where('title', 'content')->get();
        return view('livewire.admin.admin-edit-content-component',[
            'categories' => $categories
        ])->layout('layouts.admin-base');
    }
}
