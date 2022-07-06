<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lesson;

class SubmitFormsController extends Controller
{

    // $data = $this->validate([
    //     'title' => 'required|string',
    //     'description' => 'required|string',
    //     'video' => 'required|max:10000000'
    // ]);

    // $data['heading_id'] = $this->heading->id;


    public function submitLesson(Request $req, $id1, $id2 ){
       $course_id = intval($id1);
       $heading_id = intval( $id2 );

       $req->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'video' => 'required|max:10000000'
        ]);

        if($req->has('video')) {
            $fileName = time().'_'.$req->video->getClientOriginalName();
            $filePath = $req->video->move( public_path("lessons/$id1/$id2/"), $fileName );
            $data['title'] = $req->title;
            $data['description'] = $req->description;
            $data['video'] = $filePath;
        }
        dd($data);
    }
}
