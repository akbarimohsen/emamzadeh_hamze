<div>
    <div class="container">
		<div class="main-body">
			<div class="row">
                @livewire('user.dashboard-sidebar-component',[ 'user' => $user , 'active_number' => 2 ])
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
