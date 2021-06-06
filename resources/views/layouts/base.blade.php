<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href={{ asset("assets/images/favicon2.png") }} sizes="32x32" type="image/png">
    <title>جامعه - پوسته مرکز اسلامی</title>

    <link rel="stylesheet" href={{ asset("assets/css/icons.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/animate.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/fancybox.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.carousel.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/jquery.circliful.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/rtl.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/shabnam.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/responsive.css") }}>
    @livewireStyles
    <style>
        #login-buttons{
            position: absolute;
            left: 10px;
            top:10px;
        }
    </style>
    <!-- Color Scheme -->
    <link rel="stylesheet" href={{ asset("assets/css/colors/color3.css") }} /><!-- Color -->
</head>
<body>
    <main>
        <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div><!-- Pageloader Wrap -->
        <header class="style2">
            <div class="container">
                <div class="logo"><a href="index.html" title="لوگو"><img src={{ asset("assets/images/logo3.png") }} alt="لوگو"></a></div>
                <nav>
                    <div>
                        <a class="srch-btn" href="index.html#" title=""><i class="fa fa-search"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <a class="thm-btn brd-rd5" href="{{ route('admin.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                                    <a class="thm-btn brd-rd5" style="background-color:tomato; margin-left:5px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">خروج</a>
                                @elseif(Auth::user()->utype === 'USR')
                                    <a class="thm-btn brd-rd5" href="{{ route('user.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                                    <a class="thm-btn brd-rd5" style="background-color:tomato; margin-left:5px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">خروج</a>
                                @endif
                            @else
                                <a class="thm-btn brd-rd5" href="{{ route('login') }}" title="">ورود</a>
                                <a class="thm-btn brd-rd5" style="background-color:#00BCEF; margin-left:5px;" href="{{ route('register') }}" title="">ثبت نام</a>
                            @endif

                        @endif
                        {{-- <a class="thm-btn brd-rd5" href="{{ route('login') }}" title="">ورود</a>
                        <a class="thm-btn brd-rd5" style="background-color:#00BCEF; margin-left:5px;" href="{{ route('register') }}" title="">ثبت نام</a> --}}
                        <ul>
                            <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                            <li><a href="{{ route('ofogh') }}" title="">مرکز افق</a></li>

                            <li><a href="{{ route('events') }}" title="">رویداد ها</a></li>
                            <li><a href="{{ route('contests') }}" title="">مسابقات </a></li>
                            <li class="menu-item-has-children"><a href="index.html#" title="">گالری</a>
								<ul>
									<li><a href="{{ route('pictures') }}" title="">عکس ها</a></li>
									<li><a href="{{ route('videos') }}" title="">ویدیو ها</a></li>
								</ul>
							</li>
                            <li><a href="{{ route('about-us') }}" title="">درباره ما</a></li>
                            <li><a href="{{ route('contact-us') }}" title="">تماس با ما</a></li>
							{{-- <li class="menu-item-has-children"><a href="index.html#" title="">منو</a>
                                <ul>
                                    <li><a href="index.html" title="">منو اصلی 1</a></li>
                                    <li><a href="index2.html" title="">منوی اصلی 2</a></li>
                                    <li class="menu-item-has-children"><a href="index.html#" title="">منوی اصلی 3</a>
                                        <ul>
                                            <li><a href="index.html" title="">زیرمنوی 1</a></li>
                                            <li><a href="index2.html" title="">زیر منوی 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </header><!-- Header -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <ul class="rspn-scil">
                    <li><a href="index.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="index.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="index.html#" title="لینکدین" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="index.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <form class="rspn-srch">
                    <input type="text" placeholder="‌‌ کلید واژه را وارد کنید ... " />
                     <button type="submit"> <i class="fa fa-search"> </i> </button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Logo"> <img src={{ asset("assets/images/logo2.png") }} alt="logo2.png"> </a> </div>
                <div class="rspn-cnt">
                    <span><i class="fa fa-envelope thm-clr"></i><a href="index.html#" title=""> info@mail.com </a></span>
                    <span><i class="fa fa-phone thm-clr"></i> 123-456-789 </span>
                </div>
                <span class="rspn-mnu-btn"> <i class="fa fa-list-ul"></i> </span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"> <i class="fa fa-times"></i> </span>
                <span id="login-buttons">
                    <a href="{{ route('login') }}" class="btn btn-success">ورود</a>
                    <a href="{{ route('register') }}" class="btn btn-primary" style="background-color:#00BCEF;">ثبت نام</a>
                </span>
                <ul>
                            <li class="menu-item-has-children"><a href="index.html#" title="">صفحه اصلی</a>
                                <ul>
                                    <li><a href="index.html" title="">صفحه اصلی 1</a></li>
                                    <li><a href="index2.html" title="">صفحه اصلی 2</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="index.html#" title="">بلاگ</a>
                                <ul>
                                    <li><a href="blog.html" title="">صفحه اصلی</a></li>
                                    <li><a href="blog-detail.html" title="">صفحه مطلب</a></li>
                                </ul>
                            </li>
                            <li><a href="event.html" title="">رویداد ها</a></li>
                            <li><a href="crowd-funding.html" title="">کمک مالی </a></li>
                            <li class="menu-item-has-children"><a href="index.html#" title="">صفحات</a>
								<ul>
									<li><a href="team.html" title="">صفحه تیم 1</a></li>
									<li><a href="team2.html" title="">صفحه تیم 2</a></li>
									<li><a href="portfolio.html" title="">نمونه کار ها</a></li>
									<li><a href="services.html" title="">خدمات ما</a></li>
								</ul>
							</li>
                            <li><a href="about.html" title="">درباره ما</a></li>
                            <li><a href="contact.html" title="">تماس با ما</a></li>
							 {{-- <li class="menu-item-has-children"><a href="index.html#" title="">منو</a>
                                <ul>
                                    <li><a href="index.html" title="">منو اصلی 1</a></li>
                                    <li><a href="index2.html" title="">منوی اصلی 2</a></li>
                                    <li class="menu-item-has-children"><a href="index.html#" title="">منوی اصلی 3</a>
                                        <ul>
                                            <li><a href="index.html" title="">زیرمنوی 1</a></li>
                                            <li><a href="index2.html" title="">زیر منوی 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        <div class="header-search">
            <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
            <form>
                <input type="text" placeholder="جستجو کنید ...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="contact-form-model-wrap text-center">
            <span class="model-close"><i class="fa fa-times"></i></span>
            <div class="contact-form-inner">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>سوالی دارید؟</span>
                        <h3>ارسال پیام</h3>
                    </div>
                </div>
                <div class="contact-form text-center">
                    <form>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="نام">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="email" placeholder="ایمیل">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="پیام شما"></textarea>
                                <button class="thm-btn brd-rd40" type="submit">ارسال پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Contact Form Model Wrap -->
        {{ $slot }}
       <footer>
            <div class="gap top-spac70 drk-bg2 remove-bottom">
                <div class="container">
                    <div class="footer-data">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="wdgt-box style2">
                                    <div class="logo"><a href="index.html" title="Logo"><img src={{ asset("assets/images/logo2.png") }} alt="logo2.png"></a></div>
                                    <p>مرکز اسلامی <b>جامعه</b> در سال 1373 با هدف خدمت به جامعه اسلامی تشکیل شده است.</p>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>لینک های مفید</h4>
                                            <ul>
                                                <li><a href="index.html#" title="">بلاگ</a></li>
                                                <li><a href="index.html#" title="">خدمات</a></li>
                                                <li><a href="index.html#" title="">کمک مالی</a></li>
                                                <li><a href="index.html#" title="">تیم</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>صفحات سایت</h4>
                                            <ul>
                                                <li><a href="index.html#" title="">صفحه اصلی</a></li>
                                                <li><a href="index.html#" title="">مطالب سایت</a></li>
                                                <li><a href="index.html#" title="">تالار گفتمان</a></li>
                                                <li><a href="index.html#" title="">درباره ما</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>تماس با ما</h4>
                                            <ul class="cont-lst">
                                                <li><i class="flaticon-location-pin"></i>خیابان مرکزی - بخش اصلی - ساختمان مرکزی - مرکز اسلامی جامعه</li>
                                                <li><i class="flaticon-call"></i>123-456-789</li>
                                                <li><i class="flaticon-email"></i><a href="index.html#" title="">info@mail.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                    <div class="bottom-bar">
                        <p>1398 | تمامی حقوق برای جامعه مفحوظ میباشد</p>
                        <div class="scl">
                            <a href="index.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="index.html#" title="اینستاگرام" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="index.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="index.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div><!-- Bottom Bar -->
                </div>
            </div>
        </footer>
    </main><!-- Main Wrapper -->
    @livewireScripts
    <script src={{ asset("assets/js/jquery.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
    <script src={{ asset("assets/js/downCount.js") }}></script>
    <script src={{ asset("assets/js/fancybox.min.js") }}></script>
    <script src={{ asset("assets/js/isotope.pkgd.min.js") }}></script>
    <script src={{ asset("assets/js/perfectscrollbar.min.js") }}></script>
    <script src={{ asset("assets/js/owl.carousel.min.js") }}></script>
    <script src={{ asset("assets/js/jquery.circliful.min.js") }}></script>
    <script src={{ asset("assets/js/custom-scripts.js") }}></script>
    <script src={{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyALsm2XWtRQ5INM_ITSCwYB7rQdI9ILgy0") }}></script>
    <script src={{ asset("assets/js/google-map-int.js") }}></script>
    <script src={{ asset("assets/js/custom-scripts.js") }}></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
