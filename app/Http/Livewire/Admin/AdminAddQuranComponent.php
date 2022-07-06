<?php

namespace App\Http\Livewire\Admin;

use App\Models\QuranCard;
use App\Models\QuranCategory;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class AdminAddQuranComponent extends Component
{
    use WithFileUploads;
    // Ayeh features
    public $title;
    public $ayeh;
    public $translation;
    public $picture;
    public $category;

    // category features

    public $category_title;

    public function submitAyeh()
    {
        // create new ayeh
        $data = $this->validate([
            'title' => 'required|string',
            'ayeh' => 'required|string',
            'translation' => 'required|string',
            'category' => 'required|string',
            'picture' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $dest_path = public_path('assets/images/signs');

        $img_name = time() . '.' . $this->picture->extension();

        //resize Image

        $img = Image::make($this->picture->path());

        $img->resize(400 , 300 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['picture'] = $img_name;

        $ayeh = [
            'title' => $data['title'],
            'ayeh' => $data['ayeh'],
            'translation' => $data['translation'],
            'category_id' => intval($data['category']),
            'picture' => $data['picture']
        ];

        QuranCard::create($ayeh);

        session()->flash('new_card_message', 'آیه جدید با موفقیت ایجاد گردید.');

        return redirect()->route('admin.addQuran');

    }

    public function submitCategory()
    {
        $data = $this->validate([
            'category_title' => 'required|string'
        ]);

        $temp = [
            'title' => $data['category_title']
        ];

        $category = QuranCategory::create($temp);

        session()->flash('new_category_message', 'دسته جدید ایجاد گردید.');

        return redirect()->route('admin.addQuran');
    }


    public function render()
    {
        $categories = QuranCategory::all();
        return view('livewire.admin.admin-add-quran-component',[
            'categories' => $categories
        ])->layout('layouts.admin-base');
    }
}
