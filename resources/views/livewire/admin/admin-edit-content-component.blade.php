<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">افزودن آگهی</li>
        </ol>
        <form wire:submit.prevent="editContent" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات مطلب جدید</h2>
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
                            <label>عنوان مطلب</label>
                            <input type="text" class="form-control" wire:model="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>توضیحات مختصر</label>
                            <input type="text" class="form-control" wire:model="short_description">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات کامل مطلب</label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model="description" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>دسته بندی ها</label>
                            <select multiple class="form-control form-control-sm" wire:model="category" id="category" multiple>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تصویر </label>
                            <input type="file" wire:model="image" >
                        </div>
                    </div>
                </div> --}}
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <p><button type="submit" class="btn_1 medium">تغییر</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->
         </div>
</div>
