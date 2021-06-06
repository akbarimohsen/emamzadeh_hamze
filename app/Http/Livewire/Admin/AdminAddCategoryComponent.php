<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string|max:20'
        ]);

        Category::create($data);
        session()->flash('message','دسته جدید با موفقیت بارگذاری شد !!!');
        return redirect()->route('admin.addCategory');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin-base');
    }
}
