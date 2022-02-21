
    <div class="col-lg-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('assets/images/user_icon.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                    <div class="mt-3">
                        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <h5> نقش :
                            @if ($user->utype == "ADM")
                            <div class="p-1 m-1 bg-info text-white rounded">
                                ادمین
                            </div>
                            @elseif ($user->utype == "USR")
                            <div class="p-1 m-1 bg-success text-white rounded">
                                دانش آموز
                            </div>
                            @elseif ($user->utype == "TCH")
                            <div class="p-1 m-1 bg-success text-white rounded">
                                معلم
                            </div>
                            @endif
                        </h5>
                    </div>
                </div>
                <hr class="my-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action text-right @if($active_number==0) active @endif" id="list-home-list"  href="{{ route('user.dashboard') }}" role="tab" aria-controls="home">داشبورد</a>
                    <a class="list-group-item list-group-item-action text-right @if($active_number==1) active @endif" id="list-profile-list"  href="{{ route('user.phoneAuthentication') }}" role="tab" aria-controls="profile">فعال سازی موبایل</a>
                    <a class="list-group-item list-group-item-action text-right @if($active_number==2) active @endif" id="list-profile-list"  href="{{ route('user.register_servant') }}" role="tab" aria-controls="profile">ثبت نام خادم افتخاری</a>
                    <a class="list-group-item list-group-item-action text-right @if($active_number==3) active @endif" id="list-messages-list" href="{{ route('user.contests') }}" role="tab" aria-controls="messages">مسابقات شرکت کرده</a>
                    <a class="list-group-item list-group-item-action text-right @if($active_number==4) active @endif" id="list-messages-list" href="{{ route('user.orders') }}" role="tab" aria-controls="messages">سفارش های من</a>
                    @if ($user->utype == "USR" || $user->utype == "ADM")
                        <a class="list-group-item list-group-item-action text-right @if($active_number==5) active @endif" id="list-messages-list" href="{{ route('user.myCourses') }}" role="tab" aria-controls="messages">دوره های من</a>
                    @elseif($user->utype == "TCH")
                        <a class="list-group-item list-group-item-action text-right @if($active_number==6) active @endif" id="list-messages-list" href="{{ route('teacher.courses', ['id' => $user->id]) }}" role="tab" aria-controls="messages">دوره های تدریس شده</a>
                        <a class="list-group-item list-group-item-action text-right @if($active_number==7) active @endif" id="list-messages-list" href="{{ route('teacher.comments', ['id' => $user->id]) }}" role="tab" aria-controls="messages">نظرات ارسال شده</a>
                    @endif

                </div>
            </div>
        </div>
    </div>

