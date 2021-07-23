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
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form wire:submit.prevent="updateUser">
                                @if(Session::has('updateMessage'))
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success text-center">{{ Session::get('updateMessage') }}</div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">نام</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control"  wire:model.defer="first_name" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">نام خانوادگی</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control"  wire:model.defer="last_name" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">نام کاربری</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">شماره موبایل</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="ذخیره اطلاعات ">
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">فعال سازی موبایل</h5>
                                        @if ($user->is_confirm == 0)
                                            <form wire:click.prevent="submitCode">
                                                @if($expired)
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">کد ارسالی</h6>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" wire:model.defer="user_code" class="form-control">
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="row">

                                                    <div class="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        @if($expired)
                                                            <input type="button" class="btn btn-success px-4" wire:click="sendSMS" value="ارسال مجدد کد">
                                                            <button type="submit" class="btn btn-primary">ثبت کد</button>
                                                        @else
                                                            <input type="button" class="btn btn-success px-4" wire:click="sendSMS" value="ارسال کد">
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="row mt-3">
                                                <div class="col-sm-3"></div>
                                                @if (Session::has('smsMessage'))
                                                        <div class="col-sm-9">
                                                                @if (Session::get('smsMessage'))
                                                                    <div class="alert alert-success" style="text-align: right;">کد با موفقیت ارسال گردید. این کد تا ۵ دقیقه دیگر قابل استفاده می باشد.</div>
                                                                @else
                                                                    <div class="alert alert-danger" style="text-align: right;">ناموفق در ارسال کد, لطفا بعدا دوباره تلاش کنید.</div>
                                                                @endif
                                                        </div>
                                                @endif
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
