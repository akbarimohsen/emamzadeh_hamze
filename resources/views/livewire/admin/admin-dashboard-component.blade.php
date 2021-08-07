<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">داشبورد من</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-envelope-open"></i>
                </div>
                <div class="mr-5"><h5>{{ $message_count }} پیام جدید</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.messages') }}">
                <span class="float-left">مشاهده جزئیات</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-star"></i>
                </div>
                  <div class="mr-5"><h5>{{ $comment_count }} نظر جدید!</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.comments') }}">
                <span class="float-left">مشاهده جزئیات</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-calendar-check-o"></i>
                </div>
                <div class="mr-5"><h5>{{ $contests_count }} مسابقه</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.showContests') }}">
                <span class="float-left">مشاهده جزئیات</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          </div>
          <!-- /cards -->
          <h2></h2>

        </div>
        <!-- /.container-fluid-->
         </div>
</div>
