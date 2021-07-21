<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">افزودن خبر</li>
        </ol>
        <form wire:submit.prevent="submit">
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات خبر جدید</h2>
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
                            <label>عنوان خبر</label>
                            <input type="text" class="form-control" wire:model.lazy="title" >
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات خبر</label>
                            <textarea wire:model.lazy="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تصویر </label>
                            <input type="file" wire:model.lazy="image" >
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <p><button href="#0" type="submit" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->
         </div>
</div>
