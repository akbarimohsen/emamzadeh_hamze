<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>UDEMA - Admin dashboard</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('assets/admin/img/favicon.ico" type="image/x-icon')}}">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/admin/img/apple-touch-icon-57x57-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/admin/img/apple-touch-icon-72x72-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('assets/admin/img/apple-touch-icon-114x114-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('assets/admin/img/apple-touch-icon-144x144-precomposed.png')}}">
  @livewireStyles

  <!-- Bootstrap core CSS-->
  <link href={{ asset("assets/admin/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
  <!-- Main styles -->
  <link href={{ asset("assets/admin/css/admin.css") }} rel="stylesheet">
  <!-- Icon fonts-->
  <link href={{ asset("assets/admin/vendor/font-awesome/css/font-awesome.min.css") }} rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href={{ asset("assets/admin/vendor/datatables/dataTables.bootstrap4.css") }} rel="stylesheet">

  <link href="{{ asset('assets/admin/vendor/dropzone.css') }}" rel="stylesheet">
    <!-- Your custom styles -->
  <link href={{ asset("assets/admin/css/custom.css") }} rel="stylesheet">




</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/admin/img/logo.png')}}" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">داشبورد</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="{{ route('admin.messages') }}">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">پیام ها</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseContests">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">مسابقات</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseContests">
              <li>
                  <a href="{{ route('admin.addContest') }}">افزودن مسابقه جدید</a>
              </li>
              <li>
                  <a href="{{ route('admin.showContests') }}">مشاهده مسابقات</a>
              </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
          <a class="nav-link" href="{{ route('admin.comments') }}">
            <i class="fa fa-fw fa-star"></i>
            <span class="nav-link-text">نظرات</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="bookmarks.html">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">بوکمارک</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Adding">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdding" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-plus-circle"></i>
              <span class="nav-link-text">افزودن</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseAdding">
              <li>
                <a href={{ route('admin.addContent') }}>مطلب جدید</a>
              </li>
              <li>
                <a href="{{ route('admin.addPicture') }}">عکس جدید</a>
              </li>
              <li>
                  <a href="{{ route('admin.addCategory') }}">دسته جدید</a>
              </li>
              <li>
                  <a href="{{ route('admin.addEvent') }}">رویداد جدید</a>
              </li>
              <li>
                  <a href="{{ route('admin.addVideo') }}">ویدیو جدید</a>
              </li>
              <li>
                  <a href="{{ route('admin.addHekmat') }}">حکمت جدید</a>
              </li>
            </ul>
          </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">پروفایل من</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProfile">
            <li>
              <a href="user-profile.html">پروفایل کاربر</a>
            </li>
			<li>
              <a href="teacher-profile.html">پروفایل مدرس</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">اجزاء</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="charts.html">نمودارها</a>
            </li>
			<li>
              <a href="tables.html">جداول</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">پیام ها
              <span class="badge badge-pill badge-primary">12 جدید</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">پیام جدید:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>امین صفرپور</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>امین صفرپور</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>امین صفرپور</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">مشاهده همه پیام ها</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">هشداها
              <span class="badge badge-pill badge-warning">6 جدید</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">هشدار جدید:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>آپدیت سیستم</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>آپدیت سیستم</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>آپدیت سیستم</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">مشاهده همه هشدارها</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top" type="text" placeholder="جستجو...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>خروج</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->
  <div class="content-wrapper">
      {{ $slot }}
  </div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>ترجمه و بازبینی توسط ملت وب</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">خارج میشوید؟</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">برای خارج شدن دوباره روی خروج کلیک کنید.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">لغو</button>
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >خروج</a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    @livewireScripts
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery.selectbox-0.2.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/retina-replace.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('assets/admin/js/admin-charts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/dropzone.min.js') }}"></script>
</body>
</html>
