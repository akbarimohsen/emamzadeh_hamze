<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Hekmat;
use Livewire\Component;

class AdminAddHekmatComponent extends Component
{

    public $header;
    public $title;
    public $description;
    public $category;

    public function submit()
    {
        $data = $this->validate([
            'header' => 'required|string',
            'title' => 'required|string' ,
            'description' => 'required|string',
            'category' => 'required'
        ]);

        $hekmat = Hekmat::create($data);

        foreach($data['category'] as $category_id)
        {
            $hekmat->categories()->attach($category_id);
        }

        session()->flash('message' , 'حکمت جدید با موفقیت ایجاد شد .');
        return redirect()->route('admin.addHekmat');
    }
    public function render()
    {
        $categories = Category::where('title' , '=' , "hekmat")->get();
        return view('livewire.admin.admin-add-hekmat-component',[
            'categories' => $categories
        ])->layout('layouts.admin-base');
    }
}
