<div>
    <main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper" style="background-color: #35858B;">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">سبد خرید</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="{{ route('user.order.cart' , ['id' => $order->id ]) }}" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">پرداخت</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">پایان!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</section>

        @if(Session::has('deleteCourse'))
            <script>
                Swal.fire({
                icon: 'success',
                title: 'حذف دوره',
                text: '{{ Session::get("deleteCourse") }}'
                }).then( (result) => {
                    location.reload();
                } )
            </script>
        @endif

        <!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								جمع <span class="float-right">{{ $total_price }} تومان</span>
							</div>
							<a href="{{  route('user.order.pay', ['id' => $order->id ]) }}" class="btn_1 full-width">پرداخت</a>
							<a href="{{ route('education.home') }}" class="btn_1 full-width outline"><i class="icon-right"></i> ادامه خرید</a>
						</div>
					</aside>
					<div class="col-lg-8">
                        @if( Session::get("FaildPaymentMessage") )
                            <div class="alert alert-danger">
                                {{ Session::get("FaildPaymentMessage") }}
                            </div>
                        @endif
						<div class="box_cart">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            مورد
                                        </th>
                                        <th>
                                            قیمت
                                        </th>
                                        <th>
                                            اقدام
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->courses as $course )
                                        <tr>
                                            <td>
                                                <span class="item_cart"><a href="{{ route('education.showcourse', ['id' => $course->id ]) }}">{{ $course->title }}</a></span>
                                            </td>
                                            <td>
                                                <strong>{{ $course->price }} تومان</strong>
                                            </td>
                                            <td class="options" style="width:5%; text-align:center;">
                                                <a href="#" wire:click="deleteCourse({{ $course->id }})"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
					    </div>
				    </div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
</div>


