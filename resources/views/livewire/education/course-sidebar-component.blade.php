
    <aside class="col-lg-4" id="sidebar">
                     @if(Session::has('AuthMessage'))
                            <script>
                                let timerInterval
                                    Swal.fire({
                                    icon: 'error',
                                    title: 'عدم ورود به حساب کاربری',
                                    html: 'تا لحظاتی دیگر به صفحه ورود منتقل خواهید شد.',
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        const b = Swal.getHtmlContainer().querySelector('b')
                                        timerInterval = setInterval(() => {
                                        b.textContent = Swal.getTimerLeft()
                                        }, 100)
                                    },
                                    willClose: () => {
                                        clearInterval(timerInterval)
                                    }
                                    }).then((result) => {
                                    /* Read more about handling dismissals below */
                                    window.location = " {{ route('login') }} ";
                                    })
                        </script>
                        @endif

                        @if(Session::has('addCartMessage'))
                            <script>
                                let timerInterval
                                    Swal.fire({
                                    icon: 'success',
                                    title: 'دوره به سبد خرید شما اضافه گردید.',
                                    html: 'تا لحظاتی دیگر به صفحه سبد خرید منتقل خواهید شد.',
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        const b = Swal.getHtmlContainer().querySelector('b')
                                        timerInterval = setInterval(() => {
                                        b.textContent = Swal.getTimerLeft()
                                        }, 100)
                                    },
                                    willClose: () => {
                                        clearInterval(timerInterval)
                                    }
                                    }).then((result) => {
                                    /* Read more about handling dismissals below */
                                    window.location = " {{ route('user.order.cart', ['id' => $order->id ]) }} "
                                    })
                            </script>
                        @endif
                        @if(Session::has("orderExist"))
                            <script>
                                Swal.fire({
                                icon: 'error',
                                title: 'دوره تکراری',
                                text: '{{ Session::get("orderExist") }}'
                            }).then( (result) => {
                                window.location = " {{ route('user.order.cart', ['id' => $order->id ]) }} "
                            })
                            </script>
                        @endif
        <div class="box_detail">
            <figure>
                <img src="{{ asset("assets/images/courses/$course->image") }}" alt="" class="img-fluid">
            </figure>
            @auth
                @if($is_buy || $course->teacher->id === Auth::user()->id )
                    @if ($course->teacher->id === Auth::user()->id)
                        <a href="{{ route('education.showcourse' , ['id' => $course->id]) }}" class="btn_1 full-width" style="background-color: #a72828;">آموزش را ادامه بده</a>
                    @else
                        <a href="{{ route('education.showcourse' , ['id' => $course->id]) }}" class="btn_1 full-width" style="background-color: #28a745;">یادگیری را ادامه بده</a>
                    @endif
                @else
                    <div class="price">
                        {{ $course->price }} تومان
                    </div>
                    <a href="#" class="btn_1 full-width" wire:click="addCart({{$course->id}})">افزودن به سبد خرید</a>
                @endif
            @else
                <div class="price">
                    {{ $course->price }} تومان
                </div>
                <a href="#" class="btn_1 full-width" wire:click="addCart({{$course->id}})">افزودن به سبد خرید</a>
            @endauth
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                    مدرس :
                    <button class="btn btn-sm btn-primary">{{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                    زمان شروع :
                    <button class="btn btn-sm btn-success">{{ Hekmatinasser\Verta\Facades\Verta::instance($course->start_date )->format('Y-n-j')}}</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                    تعداد شرکت کنندگان :
                    <button class="btn btn-sm btn-info">{{ $course->students->count() }}</button>
                </li>
            </ul>
        </div>
    </aside>
