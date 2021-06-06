<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">مسابقات</li>
        </ol>
          <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> جداول مسابقات</div>
          <div class="card-body">
            @if (Session::has('message'))
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
                    <th>موضوع مسابقه</th>
                    <th>تعداد سوالات</th>
                    <th>دکمه ها</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contests as $contest)
                        <tr>
                            <td>{{ $contest->id }}</td>
                            <td> {{ $contest->title }} </td>
                            <td>
                                {{ $contest->questions_count }}
                            </td>
                            <td>
                                <a href="{{ route('admin.addQuestion' , ['id' => $contest->id ]) }}" class="btn btn-primary m-1" >افزودن سوال</a>
                                <a href="{{ route('admin.showQuestion' , ['id' => $contest->id]) }}" class="btn btn-success m-1">مشاهده سوالات</a>
                                <a href="#" class="btn btn-danger m-1">حذف مسابقه</a>
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
