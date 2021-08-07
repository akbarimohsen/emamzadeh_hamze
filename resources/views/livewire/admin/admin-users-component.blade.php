<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">کاربران</li>
        </ol>
          <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> جداول کاربران</div>
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
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>نام کاربری</th>
                    <th>شماره موبایل</th>
                    <th>وضعیت تاییده</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td> {{ $user->first_name }} </td>
                            <td>
                                {{ $user->last_name }}
                            </td>
                            <td>
                               {{ $user->name }}
                            </td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @if ($user->is_confirm == 0)
                                    خیر
                                @else
                                    بله
                                @endif
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
