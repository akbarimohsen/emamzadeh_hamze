<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">داشبورد</a>
                    </li>
                <li class="breadcrumb-item active">پیام ها</li>
            </ol>
          <div class="box_general">
              <h4>ورودی</h4>
              <div class="list_general">
                  <ul>
                      @foreach ($messages as $message )
                        <li>

                            @livewire('admin.admin-message-box-component' , ['message_id' => $message->id])
                            {{-- <span>2 ساعت قبل</span>
                            <figure><img src="img/avatar1.jpg" alt=""></figure>
                            <h4>امین <i class="unread">خوانده</i></h4>
                            <p>ملت وب ایپسوم متن ساختگی با تولید سادگی ملت وب از صنعت چاپ و با ملت وب از ملت وب گرافیک است. </p> --}}
                        </li>
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
        </div>
        <!-- /container-fluid-->
</div>
