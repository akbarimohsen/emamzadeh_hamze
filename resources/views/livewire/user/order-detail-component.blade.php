<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user, 'active_number' => 4 ])
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>جزییات سفارش</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                <div class="container rounded m-3 shadow-lg" style="width:auto; background-color:white;">
                                    <div class="row">
                                        <ul style="list-style-type : none;">
                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;">
                                                نام سفارش دهنده :
                                                <span style="color: green;">
                                                    {{ $order->first_name }} {{ $order->last_name }}
                                                </span>
                                            </li>

                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;">
                                                شماره همراه :
                                                <span style="color: green;">
                                                    {{ $order->phone_number }}
                                                </span>
                                            </li>
                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;">
                                                ایمیل :
                                                <span style="color: green;">
                                                    {{ $order->email }}
                                                </span>
                                            </li>
                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;"> شناسه ارجاع :
                                                <span style="color: green;" >{{ $order->referenceID }}</span>
                                            </li>
                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;" > وضعیت سفارش :
                                                @if( $order->is_buy == 0 )
                                                    <span style="color: red;" >پرداخت نشده</span>
                                                @else
                                                    <span style="color: green;" >پرداخت شده</span>
                                                @endif
                                            </li>
                                            <li class="mt-2 p-1 font-weight-bold" style="font-size: 18px;">
                                                تاریخ :
                                                <span style="color: green;">
                                                    {{ Hekmatinasser\Verta\Facades\Verta::instance($order->order_date )->format('Y-n-j H:i') }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row justify-content-center m-3">
                                    <h4>لیست دوره های این سفارش</h4>
                                </div>
                                <hr>
                                <table class="table table-bordered shadow-lg bg-white">
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
