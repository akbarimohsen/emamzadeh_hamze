<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">مسابقات </li>
        </ol>
        <form wire:submit.prevent="submit" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات مسابقه جدید</h2>
                </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="alert alert-success col-md-12">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>عنوان مسابقه</label>
                            <input type="text" class="form-control" wire:model.lazy="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>توضیحات مختصر</label>
                            <input type="text" class="form-control" wire:model.lazy="short_description">
                        </div>
                    </div>
                </div>

                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات کامل </label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model.lazy="description" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تاریخ و زمان دقیق شروع مسابقه :  </label>
                            <input type="datetime-local" wire:model.lazy="start" >
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تاریخ و زمان دقیق پایان مسابقه :  </label>
                            <input type="datetime-local" wire:model.lazy="end" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>  مدت زمان مسابقه ( ثانیه) :  </label>
                            <input type="number" wire:model.lazy="time">
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تصویر </label>
                            <input type="file" wire:model.lazy="image" >
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

