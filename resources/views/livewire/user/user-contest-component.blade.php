<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('assets/images/user_icon.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                        {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                        <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button> --}}
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action text-right" id="list-home-list"  href="{{ route('user.dashboard') }}" role="tab" aria-controls="home">داشبورد</a>
                                    <a class="list-group-item list-group-item-action text-right" id="list-profile-list"  href="{{ route('user.phoneAuthentication') }}" role="tab" aria-controls="profile">فعال سازی موبایل</a>
                                    <a class="list-group-item list-group-item-action text-right" id="list-profile-list"  href="{{ route('user.register_servant') }}" role="tab" aria-controls="profile">ثبت نام خادم افتخاری</a>
                                    <a class="list-group-item list-group-item-action text-right active" id="list-messages-list active" href="{{ route('user.contests') }}" role="tab" aria-controls="messages">مسابقات شرکت کرده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>مسابقات شرکت کرده</h4>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>تصویر مسابقه</th>
                                            <th>نام مسابقه</th>
                                            <th>اطلاعات بیشتر</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($user->contests as $contest )
                                            <tr>
                                                <td><a href="{{ route('showContest',['contest_id' => $contest->id]) }}"><img src={{ asset("assets/images/contests/$contest->image") }} class="img-responcive" width="60" height="40" alt=""></a></td>
                                                <td><b>{{ $contest->title }}</b></td>
                                                <td><a href="{{ route('showContest',['contest_id' => $contest->id]) }}" class="btn btn-info">صفحه ی مسابقه</a></td>
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
