<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $teacher , 'active_number' => 6 ])
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>دوره های تدریس شده</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>نام دوره</th>
                                            <th>قیمت دوره</th>
                                            <th>دانش آموزان</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($teacher->teachingCourses as $course)
                                            <tr>
                                                <td> {{ $course->title }} </td>
                                                <td>  {{ $course->price }} </td>
                                                <td> <a href="#" class=" btn btn-primary btn-sm">  مشاهده دانش آموزان</a> </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm m-1" wire:click="delete({{$course->id}})">حذف دوره</button>
                                                    <button class="btn btn-success btn-sm m-1" > صفحه دوره</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
