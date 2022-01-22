<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class AdminAddContentComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $short_description;
    public $description;
    public $category;
    public $image;
    public $is_speech;
    public $day_of_speech;

    public function submit()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'category' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'is_speech' => 'required'
        ]);

        if($this->is_speech == 1)
        {
            $data['day_of_speech'] = $this->day_of_speech;
            $dest_path = public_path('/assets/images/speeches');
        }else{
            $dest_path = public_path('/assets/images/contents');
        }
        $data['user_id'] = Auth::user()->id;
        // $data['image'] = $this->image->store('contents_images','public');
        $img_name = time() . '.' . $this->image->extension();

        //resize Image

        $img = Image::make($this->image->path());

        $img->resize(780 , 400 , function($constraint) {
            $constraint->aspectRatio();
        })->save($dest_path . '/' . $img_name);

        $data['image'] = $img_name;

        $content = Content::create($data);

        foreach($data['category'] as $category_id)
        {
            $content->categories()->attach($category_id);
        }

        session()->flash('message' , 'مطلب شما با موفقیت ایجاد شد !!!');
        return redirect()->route('admin.addContent');
    }

    public function render()
    {
        $categories = Category::where('title','content')->get();
        return view('livewire.admin.admin-add-content-component',[
            "categories" => $categories
        ])->layout('layouts.admin-base');
    }
}
