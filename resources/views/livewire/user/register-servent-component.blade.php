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
                                <a class="list-group-item list-group-item-action text-right active" id="list-profile-list"  href="{{ route('user.register_servant') }}" role="tab" aria-controls="profile">ثبت نام خادم افتخاری</a>
                                <a class="list-group-item list-group-item-action text-right" id="list-messages-list" href="{{ route('user.contests') }}" role="tab" aria-controls="messages">مسابقات شرکت کرده</a>
                            </div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
                        <h5 class="card-title text-right mt-2 mr-2"> ثبت نام خادم افتخاری</h5>
						<div class="card-body">
                            <form wire:submit.prevent="submit">
                                @if(Session::has('message'))
                                    {{-- <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success text-center">{{ Session::get('updateMessage') }}</div>
                                        </div>
                                    </div> --}}
                                    <script>
                                        Swal.fire({
                                         icon: 'success',
                                         title: 'ثبت نظر',
                                         text: '{{ Session::get("message") }}'
                                       }).then(function(){
                                           location.reload();
                                       })
                                    </script>
                                @endif
                                @if($user->activity == 0)
                                    <div class="row mb-3">
                                        <div class="col-sm-3 text-right">
                                            <h6 class="mb-0"> حوزه ی فعالیت تخصصی را انتخاب نمایید :  </h6>
                                        </div>
                                        <div class="col-sm-9 mt-4 text-right">
                                            <select class="form-control" wire:model="activity">
                                                <option value="1" selected>عمرانی و پشتیبانی</option>
                                                <option value="2"> انتظامات و خدمات</option>
                                                <option value="3">رسانه و فضای مجاری</option>
                                                <option value="4">فرهنگی</option>
                                                <option value="5">مداحی</option>
                                                <option value="6">تصویربرداری و مستندسازی</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="ثبت حوزه فعالیت">
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <span class="alert alert-info"> شما در حوزه  <b>{{$activities[$user->activity]}}</b> ثبت نام شدید. </span>
                                    </div>
                                @endif
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
