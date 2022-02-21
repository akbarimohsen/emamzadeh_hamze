<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user, 'active_number' => 7 ])
                    <div class="col-lg-8">
                        @if(Session::has('confirmMessage'))
                            <script>
                                    Swal.fire({
                                    icon: 'success',
                                    text: '{{ Session::get("confirmMessage") }}'
                                }).then( (result) => {
                                    location.reload();
                                })
                            </script>
                        @endif
                        <div class="row justify-content-center m-3">
                            <h4>نظرات ارسال شده</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                @if($user->teachingCourses->count() > 0)
                                    <div class="row bg-white m-1">
                                        <div class="col text-center m-1">
                                            <h5>دوره مورد نظر را انتخاب کنید :</h5>
                                        </div>
                                        <div class="col text-center m-1">
                                            <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  انتخاب دوره
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  @foreach ($user->teachingCourses as $course)
                                                    <a class="dropdown-item" href="#" class="text-center" wire:click="selectCourse({{ $course->id }})" >{{ $course->title }}</a>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-info font-weight-bold text-center">
                                        معلم عزیز, شما هیچ دوره ثبت شده شده ای را ندارید.
                                    </div>
                                @endif
                                <div class="row center justify-content-center mt-4">
                                    @foreach ($course->comments()->orderBy('created_at', 'desc')->get() as $comment)
                                        <div class="card text-white bg-white shadow-lg m-2" style="width: 35rem;">
                                            <div class="card-header" style="color: black;">
                                                <div class="row justify-content-between">
                                                    <div class="col text-right">
                                                        <h5>{{ $comment->title }}</h5>
                                                    </div>
                                                    @if($comment->confirm == 0)
                                                        <div class="col">
                                                            <button class="btn btn-success btn-sm">جدید</button>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="card-body text-right">
                                                <h5 class="card-title text-right text-black font-weight-bold">{{ $comment->user_name }}</h5>
                                                <p class="card-text text-right text-black font-weight-bold">{{ $comment->description }}</p>
                                            </div>
                                            <div class="card-footer bg-transparent border-success text-right text-black font-weight-bold">
                                                @if ($comment->confirm == 0)
                                                    <a href="#" class="btn btn-info btn-sm"  wire:click="confirmComment('accept', {{ $comment->id }})" >قبول</a>
                                                    <a href="#" class="btn btn-danger btn-sm" wire:click="confirmComment('reject' , {{ $comment->id }})" >رد</a>
                                                @elseif ($comment->confirm == 1)
                                                    <a href="#" class="btn btn-success btn-sm" style="pointer-events: none;" > قبول شده</a>
                                                @elseif ($comment->confirm == -1)
                                                    <a href="#" class="btn btn-danger btn-sm" style="pointer-events: none;" >رد شده</a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
