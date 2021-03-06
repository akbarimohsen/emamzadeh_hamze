<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">{{ $contest_title }}</li>
        </ol>
          <div class="box_general">
              <div class="header_box">
                  <h2 class="d-inline-block">لیست سوالات</h2>
              </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="alert alert-danger col-md-6">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
              <hr>
              <div class="list_general reviews">
                  <ul>
                      @foreach ($questions as $question)
                        @livewire('admin.admin-question-box-component' , ['question_id' => $question->id])
                      @endforeach
                  </ul>
              </div>
          </div>
          <!-- /box_general-->
            <nav aria-label="...">
                <ul class="pagination pagination-sm add_bottom_30">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">قبلی</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">بعدی</a>
                    </li>
                </ul>
            </nav>
          <!-- /pagination-->

        <!-- /container-fluid-->
         </div>
</div>

