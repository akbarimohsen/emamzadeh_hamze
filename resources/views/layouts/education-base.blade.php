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
					<p><img src={{ asset("assets/images/logo3.png") }} width="70" height="70" data-retina="true" alt=""></p>
					<p>ما خادمین امامزاده حمزه (ع) در راستای بهبود و رفع مشکلات فرهنگی جامعه قدم بر میداریم. امیدواریم که با کمک شما
                        بتوانیم این اهداف را به انجام برسانیم.
                    </p>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>لینک های مفید</h5>
					<ul class="links">

                            <li><a href="{{ route('ofogh') }}" title="">مرکز افق</a></li>
                            <li><a href="{{ route('quranAndHadis') }}" title="">قرآن و حدیث</a></li>
                            <li><a href="{{ route('pictures') }}" title="">عکس ها</a></li>
                            <li><a href="{{ route('videos') }}" title="">ویدیو ها</a></li>
                            <li><a href="{{ route('education.home') }}" title="">واحد آموزش مجازی</a></li>

					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>تماس با ما</h5>
					<ul class="contacts">
						<li><a href="tel_3a//61280932400"><i class="ti-mobile"></i> 0921 044 71 07</a></li>
						<li><a href="mailto:info@udema.com"><i class="ti-email"></i>mohsen.akbari451@gmail.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>خبرنامه</h6>
					<div id="message-newsletter"></div>
					</div>
				</div>
			</div>
			<!--/row-->
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
