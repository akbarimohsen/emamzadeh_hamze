<!DOCTYPE html>
<html lang="en">
<head>
	<title>صفحه ثبت نام</title>
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
			<div class="wrap-login100 p-t-85 p-b-20" style="padding: 20px; border-radius:20px; ">
				<form method="POST" class="login100-form validate-form" action="{{ route('register') }}">
                    @csrf
					<span class="login100-form-title p-b-70">
						{{ __('صفحه ثبت نام') }}
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

                    {{-- First Name --}}
					<div class="wrap-input100 validate-input m-t-10 m-b-30" data-validate = "نام خود را وارد کنید">
						<input class="input100" type="text" name="first_name">
						<span class="focus-input100"  data-placeholder="نام "></span>
					</div>

                    {{-- Last Name --}}
                    <div class="wrap-input100 validate-input m-t-10 m-b-30" data-validate = "نام خانوادگی خود را وارد کنید">
						<input class="input100" type="text" name="last_name">
						<span class="focus-input100"  data-placeholder="نام خانوادگی"></span>
					</div>

                    {{-- User Name --}}
                    <div class="wrap-input100 validate-input m-t-10 m-b-30" data-validate = "نام کاربری خود را وارد کنید">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"  data-placeholder="نام کاربری"></span>
					</div>

                    {{-- Phone Number --}}
                    <div class="wrap-input100 validate-input m-t-10 m-b-30" data-validate = "شماره موبایل خود را وارد کنید">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100"  data-placeholder="شماره موبایل"></span>
					</div>

                    {{-- Password --}}
					<div class="wrap-input100 validate-input m-b-30" data-validate="رمز عبور خود را وارد کنید">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"  data-placeholder="رمز عبور"></span>
					</div>

                    {{-- Confirm Password --}}
                    <div class="wrap-input100 validate-input m-b-30" data-validate="تکرار رمز عبور را وارد کنید">
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100"  data-placeholder="تکرار رمز عبور"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							ثبت نام
						</button>
					</div>

					 <ul class="login-more p-t-45">
						<li>
							<span class="txt1">
								حساب کاربری دارید؟
							</span>

							<a href="{{ route('login') }}" class="txt2">
								صفحه ورود
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


