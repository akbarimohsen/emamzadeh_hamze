<!DOCTYPE html><!-- saved from url=(0040)http://www.ansonika.com/udema/index.html --><meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>آموزش مجازی امامزاده حمزه (ع)</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href={{ asset("assets/education/img/favicon.ico") }} type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href={{ asset("assets/education/img/apple-touch-icon-57x57-precomposed.png") }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href={{ asset("assets/education/img/apple-touch-icon-72x72-precomposed.png") }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href={{ asset("assets/education/img/apple-touch-icon-114x114-precomposed.png") }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href={{ asset("assets/education/img/apple-touch-icon-144x144-precomposed.png") }}>

    <!-- BASE CSS -->
    <link href={{ asset("assets/education/css/bootstrap.min.css") }} rel="stylesheet">
    <link href={{ asset("assets/education/css/style.css") }} rel="stylesheet">
	<link href={{ asset("assets/education/css/vendors.css") }} rel="stylesheet">
	<link href={{ asset("assets/education/css/icon_fonts/css/all_icons.min.css") }} rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href={{ asset("assets/education/css/custom.css") }} rel="stylesheet">
    @livewireStyles()

</head>

<body>
    @php
        if( !auth()->check() )
        {
            session()->flash('AuthMessage', 'ابتدا وارد حساب کاربری خود شوید !!!');
        }else
        {
            $user = Auth::user();
            $order = \App\Models\Order::where('user_id', $user->id)->where('is_buy', 0)->latest()->first();
        }
    @endphp
	<div id="page">
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div>
		<ul id="top_menu">
            @auth
                <li><a href="{{ route('user.dashboard') }}" class="btn btn-sm btn-light rounded text-dark"><img src={{ asset("assets/images/icons/person-fill.svg") }}>حساب کاربری</a></li>
                @if($order)
                    <li><a href="{{ route('user.order.cart', ['id' => $order->id]) }}" class="btn btn-sm btn-light rounded text-dark"><img src={{ asset("assets/images/icons/briefcase.svg") }}>سبد خرید</a></li>
                @endif
            @else
                <li><a href="{{ route('login') }}" class="btn btn-sm btn-light rounded text-dark"><img src={{ asset("assets/images/icons/person-fill.svg") }} >ورود</a></li>
            @endauth
		</ul>
		<!-- /top_menu -->
	</header>


	<!-- /header -->
	{{ $slot }}
	<!-- /main -->

	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src={{ asset("assets/education/img/logo.png") }} width="149" height="42" data-retina="true" alt=""></p>
					<p>ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
					<div class="follow_us">
						<ul>
							<li>مارا دنبال کنید</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>لینک های مفید</h5>
					<ul class="links">
						<li><a href="#0">پذیرش</a></li>
						<li><a href="#0">درباره</a></li>
						<li><a href="#0">ورود</a></li>
						<li><a href="#0">ثبت نام</a></li>
						<li><a href="#0">اخبار و رویداد</a></li>
						<li><a href="#0">تماس</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>تماس با ما</h5>
					<ul class="contacts">
						<li><a href="tel_3a//61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@udema.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>خبرنامه</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="ایمیل شما">
							<input type="submit" value="ارسال" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">قوانین و مقررات</a></li>
						<li><a href="#0">حریم خصوصی</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© ترجمه و بازبینی توسط ملت وب</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
    @livewireScripts()
    <script src={{ asset("assets/education/js/jquery-2.2.4.min.js") }}></script>
    <script src={{ asset("assets/education/js/common_scripts.js") }}></script>
    <script src={{ asset("assets/education/js/main.js") }}></script>
	<script src={{ asset("assets/education/assets/validate.js") }}></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
