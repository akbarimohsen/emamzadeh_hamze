<!DOCTYPE html>
<html lang="en">
<head>
	<title>صفحه ورود</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_page_util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_page_main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100 " style="background-color: #006400;">
			<div class="wrap-login100 p-t-85 p-b-20" style="padding: 20px; border-radius:20px;" >
				<form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-70">
						{{ __('صفحه ورود') }}
					</span>
					<span class="login100-form-avatar">
						<img src="{{ asset('assets/images/login_page_logo.jpg') }}" alt="AVATAR">
					</span>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mt-3" style="font-size: 10pt;" dir="rtl">
                                @foreach ($errors->all() as $error)
                                    <li style="color: red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif --}}

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "شماره موبایل خود را وارد کنید">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100"  data-placeholder="شماره موبایل"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="رمز عبور خود را وارد کنید">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"  data-placeholder="رمز عبور"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							ورود
						</button>
					</div>

					<ul class="login-more p-t-45">
						<li>
							<span class="txt1">
								حساب کاربری ندارید؟
							</span>

							<a href="{{ route('register') }}" class="txt2">
								صفحه ثبت نام
							</a>
						</li>
					</ul>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/js/login_page_main.js') }}"></script>

</body>
</html>


