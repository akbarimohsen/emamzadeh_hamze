<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user , 'active_number' => 1 ])
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-sm-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @if (Session::has('smsMessage'))
                                                        <div class="col-sm-12">
                                                                @if (Session::get('smsMessage'))
                                                                    <div class="alert alert-success" style="text-align: right;font-size:12px;">کد با موفقیت ارسال گردید. این کد تا ۵ دقیقه دیگر قابل استفاده می باشد.</div>
                                                                @else
                                                                    <div class="alert alert-danger" style="text-align: right;font-size:12px;">سامانه قادر به ارسال پیغام نیست. ممکن است به علت غیرفعال کردن ارسال پیامک های تبلیغاتی توسط کاربر باشد.</div>
                                                                @endif
                                                        </div>
                                                @endif
                                            </div>
                                            <h5 class="d-flex align-items-center mb-3">فعال سازی موبایل</h5>
                                            @if ($user->is_confirm == 0)
                                                <form wire:click.prevent="submitCode">
                                                    @if($expired)
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-2 text-right ">کد ارسالی</h6>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" wire:model.defer="user_code" class="form-control">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        @if($expired)
                                                            <script>
                                                                var end = new Date("{{ $expired }}").getTime();
                                                                    var x = setInterval(function(){
                                                                        var now = new Date().getTime();
                                                                        distance = end - now ;
                                                                        var minutes  = Math.floor(distance/(60*1000));
                                                                        var seconds  = Math.floor((distance%(60*1000)) / 1000);
                                                                        document.getElementById("time_counter").innerHTML =   minutes + "دقیقه  "+
                                                                        seconds + " ثانیه ";
                                                                        if(distance < 0)
                                                                        {
                                                                            window.location.href = "{{ route('user.phoneAuthentication') }}";
                                                                        }

                                                                    },1000)
                                                            </script>
                                                        @endif
                                                        <div class="col-sm-3">
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            @if($expired)
                                                                {{-- <input type="button" class="btn btn-success px-4" wire:click="sendSMS" value="ارسال مجدد کد"> --}}
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6 col-lg-8">
                                                                        <p id="time_counter"  style="float: right;" class="text-danger"></p>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                                                        <button type="submit" class="btn btn-sm btn-primary">ثبت کد</button>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <button type="button" id="btnFetch" class="btn btn-success px-4" wire:click="sendSMS">ارسال کد</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="row mt-3">
                                                    <div class="col-sm-3"></div>
                                                    @if(Session::has('message'))
                                                            <div class="col-sm-9">
                                                                <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                                            </div>
                                                    @endif
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-info" style="text-align: center;">شماره همراه شما {{ $user->phone }} فعال شده است</div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
