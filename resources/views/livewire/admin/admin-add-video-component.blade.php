<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">افزودن </li>
        </ol>
        <form wire:submit.prevent="submit" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات ویدیو جدید</h2>
                </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="alert alert-success col-md-12">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>کد آیفریم </label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model.lazy="iframe" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_general-->
            <p><button href="#0" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->
         </div>

</div>
