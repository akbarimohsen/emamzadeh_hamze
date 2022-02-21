<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user , 'active_number' => 3 ])
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
