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
							<a href="{{ route('user.order.cart', ['id' => $order->id]) }}" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">پرداخت</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="{{ route('user.order.pay', ['id' => $order->id ]) }}" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">پایان!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
					<div id="confirm">
						<h4>سفارش تکمیل شد!</h4>
						<p>به زودی ایمیل تایید را دریافت خواهید کرد.</p>
					</div>
				</div>
			</div>
		</section>
		<!--/hero_in-->
	</main>
	<!--/main-->

</div>
