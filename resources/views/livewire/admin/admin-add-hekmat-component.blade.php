
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
                    <h2><i class="fa fa-file"></i>اطلاعات حکمت جدید</h2>
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
                            <label>سرتیتر</label>
                            <input type="text" class="form-control" wire:model="header">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>موضوع</label>
                            <input type="text" class="form-control" wire:model="title">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات </label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model="description" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>دسته بندی ها</label>
                            <select multiple class="form-control form-control-sm" wire:model="category" id="category" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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
