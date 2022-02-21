<?php

namespace App\Http\Livewire\Education;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Heading;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Quiz;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class CourseComponent extends Component
{

    use AuthorizesRequests;

    public $course;
    public $order;

    // comment message
    public $title;
    public $email;
    public $description;


    public function mount($id){
        $this->course = Course::find($id);
    }


    public function deleteHeading($id)
    {
        $heading = Heading::find($id);
        $heading->delete();

        session()->flash('deleteHeading', 'سرفصل با موفقیت حذف گردید!!!');
    }
    public function deleteLesson($id){
        $lesson = Lesson::find($id);

        Storage::delete( 'lessons/'.  $lesson->video );

        $lesson->delete();

        session()->flash('deleteLesson', 'سرفصل با موفقیت حذف گردید!!!');
    }

    public function deleteQuiz($id){
        $quiz = Quiz::find($id);
        $quiz->delete();

        session()->flash('deleteQuiz', 'آزمون با موفقیت حذف گردید!!!');
    }


    public function sendComment()
    {
        if( auth()->check() )
        {
            $user = Auth::user();

            $data = $this->validate([
                'title' => 'required|string',
                'email' => 'required|email',
                'description' => 'required|string'
            ]);

            $user_name = $user->name;

            $data['user_name'] = $user_name;

            $comment = Comment::create($data);

            $comment->courses()->attach( $this->course->id );

            session()->flash('sendCommentMessage', 'نظر شما با موفقیت ثبت گردید, بزودی پس از بررسی, نظر شما در سایت قرار می گیرد.');
        }

    }

    public function render()
    {
        return view('livewire.education.course-component',[
            'course' => $this->course,
        ])->layout('layouts.education-base');
    }
}
