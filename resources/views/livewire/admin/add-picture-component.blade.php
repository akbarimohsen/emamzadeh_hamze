<div>
    <div>
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">داشبورد</a>
              </li>
              <li class="breadcrumb-item active">افزودن عکس جدید</li>
            </ol>
            <form wire:submit.prevent="submit" >
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>بارگذاری عکس</h2>
                    </div>
                    @if (Session::has('message'))
                        <div class="row">
                            <div class="alert alert-success col-md-12">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>نام عکس</label>
                                <input type="text" class="form-control" wire:model="name">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>تصویر </label>
                                <input type="file" wire:model="image" >
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                </div>
                <!-- /box_general-->
                <p><button href="#0" class="btn_1 medium">ذخیره</button></p>
                </div>
            </form>
            <!-- /.container-fluid-->
             </div>
    </div>
</div>
