<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user, 'active_number' => 5 ])
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>دوره های من</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                @if($user->courses->count() == 0)
                                    <div class="alert alert-primary text-center" >
                                        شما در هیچ دوره ای تاکنون شرکت نکرده اید!!!
                                    </div>
                                @else
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>نام دوره</th>
                                                <th>معلم</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($user->courses as $course)
                                                <tr>
                                                    <td> {{ $course->id}} </td>
                                                    <td> {{ $course->title }} </td>
                                                    <td>
                                                    {{ $course->teacher->first_name }} {{ $course->teacher->last_name }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('education.showcourse' ,['id' => $course->id ]) }}" class="btn btn-sm btn-outline-primary">مشاهده</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
