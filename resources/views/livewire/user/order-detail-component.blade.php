<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user, 'active_number' => 4 ])
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>لیست دوره های این سفارش</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>نام دوره</th>
                                            <th>مدرس</th>
                                            <th>قیمت</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($order->courses as $course)
                                            <tr>
                                                <td> {{ $course->id }} </td>
                                                <td>  {{ $course->title }} </td>
                                                <td>
                                                    {{ $course->teacher->first_name  }} {{ $course->teacher->last_name }}
                                                </td>
                                                <td>
                                                    {{ $course->price }} تومان
                                                </td>
                                                <td><a href="{{ route('education.showcourse', ['id' => $course->id ] ) }}" class="btn btn-primary btn-sm">مشاهده دوره</a></td>
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
