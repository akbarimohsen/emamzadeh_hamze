<div>
    <main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper" style="background-color: #35858B;">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">سبد خرید</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="{{  route('user.order.cart' , ['id' => $order->id]) }}" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
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
		<!--/hero_in-->
        @if(Session::has("payMessage"))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'پرداخت موفق',
                    text: '{{ Session::get("payMessage") }}'
                    }).then( (result) => {
                        window.location = " {{ route('user.order.end', ['id' => $order->id ]) }} "
                    })
            </script>
        @endif
        <div class="bg_color_1">
			<div class="container margin_60_35">
                <form method="POST" action={{ route('user.order.purchase', ['id' => $order->id]) }}>
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="box_cart">

                            <div class="form_title">
                                <h3><strong>1</strong>جزئیات شما</h3>
                                <p>
                                    اطلاعات شما برای پرداخت
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" name="first_name" required>
                                            <label class="input_label">
                                                <span class="input__label-content">نام</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" name="last_name" required>
                                            <label class="input_label">
                                                <span class="input__label-content">نام خانوادگی</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="email" name="email" required>
                                            <label class="input_label">
                                                <span class="input__label-content">ایمیل</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" name="phone_number" required>
                                            <label class="input_label">
                                                <span class="input__label-content">تلفن</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!--End step -->
                            </div>
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <div id="total_cart">
                                    جمع <span class="float-right">{{ $total_price }} تومان</span>
                                    <input type="hidden" value="{{ $total_price }}" name="price" />
                                </div>
                                {{-- class="btn_1 full-width" --}}
                                <button type="submit" class="btn_1 full-width">خرید</button>
                                <a href="{{ route('education.home') }}" class="btn_1 full-width outline"><i class="icon-right"></i> ادامه خرید</a>
                            </div>
                        </aside>


                    </div>
                </form>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

	</main>
	<!--/main-->
</div>
