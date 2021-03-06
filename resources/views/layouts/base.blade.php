<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href={{ asset("assets/images/favicon2.png") }} sizes="32x32" type="image/png">

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
    <link rel="stylesheet" href="{{ asset('assets/css/user-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tab.css') }}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
    <style>
        #login-buttons{
            position: absolute;
            left: 10px;
            top:10px;
        }
        .checked{

        }
    </style>
    <!-- Color Scheme -->
    <link rel="stylesheet" href={{ asset("assets/css/colors/color3.css") }} /><!-- Color -->
</head>
<body>
    <main>
        {{-- <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div><!-- Pageloader Wrap --> --}}
        <header class="style2">
            <div class="container">
                <div class="logo"><a href="{{ route('home') }}" title="????????"><img src={{ asset("assets/images/logo3.png") }} alt="????????"></a></div>
                <nav>
                    <div>
                        <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <a class="thm-btn brd-rd5" href="{{ route('admin.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                                    <a class="thm-btn brd-rd5" style="background-color:tomato; margin-left:5px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">????????</a>
                                @elseif(Auth::user()->utype === 'USR' || Auth::user()->utype === 'TCH')
                                    <a class="thm-btn brd-rd5" href="{{ route('user.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                                    <a class="thm-btn brd-rd5" style="background-color:tomato; margin-left:5px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">????????</a>
                                @endif
                            @else
                                <a class="thm-btn brd-rd5" href="{{ route('login') }}" title="">????????</a>
                                <a class="thm-btn brd-rd5" style="background-color:#00BCEF; margin-left:5px;" href="{{ route('register') }}" title="">?????? ??????</a>
                            @endif

                        @endif
                        {{-- <a class="thm-btn brd-rd5" href="{{ route('login') }}" title="">????????</a>
                        <a class="thm-btn brd-rd5" style="background-color:#00BCEF; margin-left:5px;" href="{{ route('register') }}" title="">?????? ??????</a> --}}
                        <ul>
                            <li><a href="{{ route('home') }}" title="">???????? ????????</a></li>
                            <li><a href="{{ route('ofogh') }}" title="">???????? ??????</a></li>

                            <li><a href="{{ route('events') }}" title="">???????????? ????</a></li>
                            <li><a href="{{ route('contests') }}" title="">?????????????? </a></li>
                            <li><a href="{{ route('education.home') }}" title="">?????????? ?????????? </a></li>
                            <li><a href="{{ route('quranMemorization') }}">?????? ???????????? ????????</a></li>

                            <li><a href="{{ route('books') }}" title="">???????? ???? </a></li>

                            <li class="menu-item-has-children"><a href="#">??????????</a>
								<ul>
									<li><a href="{{ route('pictures') }}" title="">?????? ????</a></li>
									<li><a href="{{ route('videos') }}" title="">?????????? ????</a></li>
								</ul>
							</li>
                            <li><a href="{{ route('about-us') }}" title="">???????????? ????</a></li>
                            <li><a href="{{ route('contact-us') }}" title="">???????? ???? ????</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header><!-- Header -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="#" title="Logo"> <img src={{ asset("assets/images/logo2.png") }} alt="logo2.png"> </a> </div>

                <span class="rspn-mnu-btn"> <i class="fa fa-list-ul"></i> </span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"> <i class="fa fa-times"></i> </span>
                <span id="login-buttons">
                    @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->utype === 'ADM')
                            <a class="btn btn-success" href="{{ route('admin.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                            <a class="btn btn-danger" style="background-color:tomato; margin-left:5px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">????????</a>
                        @elseif(Auth::user()->utype === 'USR' || Auth::user()->utype === 'TCH')
                            <a class="btn btn-success" href="{{ route('user.dashboard') }}" title="">{{ Auth::user()->name }}</a>
                            <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">????????</a>
                        @endif
                    @else
                        <a class="btn btn-success" href="{{ route('login') }}" title="">????????</a>
                        <a class="btn btn-primary" style="background-color:#00BCEF; margin-left:5px;" href="{{ route('register') }}" title="">?????? ??????</a>
                    @endif
                @endif
                    {{-- <a href="{{ route('login') }}" class="btn btn-success">????????</a>
                    <a href="{{ route('register') }}" class="btn btn-primary" style="background-color:#00BCEF;">?????? ??????</a> --}}
                </span>
                <ul>
                            <li><a href="{{ route('home') }}">???????? ?? ????????</a></li>
                            <li><a href="{{ route('ofogh') }}">???????? ??????</a></li>
                            <li><a href="{{ route('events') }}" title="">???????????? ????</a></li>
                            <li><a href="{{ route('contests') }}" title="">?????????????? </a></li>
                            <li><a href="{{ route('books') }}">???????? ????</a></li>

                            <li><a href="{{ route('pictures') }}" title="">?????? ???? </a></li>
                            <li><a href="{{ route('videos') }}" title="">??????????????</a></li>

                            <li><a href="{{ route('about-us') }}" title="">???????????? ????</a></li>
                            <li><a href="{{ route('contact-us') }}" title="">???????? ???? ????</a></li>
							
                        </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
            <div class="header-search">
                <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
                <form>
                    <input type="text" placeholder="?????????? ???????? ...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- Header Search -->
        <div class="contact-form-model-wrap text-center">
            <span class="model-close"><i class="fa fa-times"></i></span>
            <div class="contact-form-inner">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>?????????? ????????????</span>
                        <h3>?????????? ????????</h3>
                    </div>
                </div>
                <div class="contact-form text-center">
                    <form>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="??????">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="email" placeholder="??????????">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="???????? ??????"></textarea>
                                <button class="thm-btn brd-rd40" type="submit">?????????? ????????</button>
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
                                    <p>???? ???????????? ???????????????? ???????? (??) ???? ???????????? ?????????? ?? ?????? ???????????? ???????????? ?????????? ?????? ???? ??????????????. ?????????????????? ???? ???? ?????? ??????
                                        ?????????????? ?????? ?????????? ???? ???? ?????????? ??????????????.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>???????? ?????? ????????</h4>
                                            <ul>
                                                <li><a href="{{ route('ofogh') }}" title="">???????? ??????</a></li>
                                                <li><a href="{{ route('quranAndHadis') }}" title="">???????? ?? ????????</a></li>
                                                <li><a href="{{ route('pictures') }}" title="">?????? ????</a></li>
                                                <li><a href="{{ route('videos') }}" title="">?????????? ????</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>?????????? ????????</h4>
                                            <ul>
                                                <li><a href="{{ route('home') }}" title="">???????? ????????</a></li>
                                                <li><a href="{{ route('ofogh') }}" title="">??????????</a></li>
                                                <li><a href="{{ route('books') }}" title="">???????? ?????? ????????????????????</a></li>
                                                <li><a href="{{ route('about-us') }}" title="">???????????? ????</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="wdgt-box">
                                            <h4>???????? ???? ????</h4>
                                            <ul class="cont-lst">
                                                <li><i class="flaticon-location-pin"></i>?????????????? ????????- ???????????? ???????? ??????????- ?????????? ???????? ???????????????? ????????(??)</li>
                                                <li><i class="flaticon-call"></i> 09210447107</li>
                                                {{-- <li><i class="flaticon-email"></i><a href="index.html#" title="">info@mail.com</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                    <div class="bottom-bar">
                        <p>?????????? ???????? ?????????????? ?????? ???????? ?????????? ???? ????????.</p>
                        <div class="scl">
                            {{-- <a href="index.html#" title="????????????" target="_blank"><i class="fa fa-twitter"></i></a> --}}
                            <a href="https://www.instagram.com/emamzadeh_hamzeh/?hl=en" title="????????????????????" target="_blank"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="index.html#" title="???????? ????????" target="_blank"><i class="fa fa-google-plus"></i></a> --}}
                            {{-- <a href="index.html#" title="????????????" target="_blank"><i class="fa fa-facebook"></i></a> --}}
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src={{ asset("assets/js/custom-scripts.js") }}></script>
    <script src={{ asset("assets/js/google-map-int.js") }}></script>
    <script src={{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyALsm2XWtRQ5INM_ITSCwYB7rQdI9ILgy0") }}></script>
    <script>
                    $(document).ready(function() {
                        $("#btnFetch").click(function() {
                        // disable button
                        $(this).prop("disabled", true);
                        // add spinner to button
                        $(this).html(
                        '<i class="fa fa-circle-o-notch fa-spin"></i> ??????????????...'
                        );
                        });
                        });
    </script>
</body>
</html>
