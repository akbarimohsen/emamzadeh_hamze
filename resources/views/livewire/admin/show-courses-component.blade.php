<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">دوره ها</li>
        </ol>
          <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> جداول دوره ها</div>
          <div class="card-body">
            @if(Session::has('message'))
                <div class="row">
                    <div class="alert alert-success col-md-12">
                        <?php echo session('message') ?>
                    </div>
                </div>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>نام دوره</th>
                    <th>قیمت دوره</th>
                    <th>نام معلم</th>
                    <th>لیست دانش آموزان</th>
                    <th>عملیات</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->price }} </td>
                            <td>
                                {{ $course->teacher->first_name }} {{ $course->teacher->last_name }}
                            </td>
                            <td><a href="#" class="btn btn-primary btn-sm" >لیست دانش آموزان</a></td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" >تغییر</a>
                                <button class="btn btn-danger btn-sm ">حذف</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        </div>
	  <!-- /tables-->
	  </div>
</div>
