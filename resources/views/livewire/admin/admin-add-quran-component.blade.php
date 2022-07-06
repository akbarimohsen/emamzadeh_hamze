<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">افزودن آیه قرآن</li>
        </ol>
        <form wire:submit.prevent="submitAyeh" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات آیه جدید</h2>
                </div>
                @if (Session::has('new_card_message'))
                    <div class="row">
                        <div class="alert alert-success col-md-12">
                            {{ session('new_card_message') }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>عنوان</label>
                            <input type="text" class="form-control" wire:model="title"  >
                        </div>
                    </div>
                </div>
                <!-- /row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> آیه</label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model="ayeh" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>ترجمه آیه</label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model="translation" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>دسته بندی ها</label>
                            <select class="form-control form-control-sm"  id="category" wire:model="category" >
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تصویر </label>
                            <input type="file" wire:model="picture">
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <p><button type="submit" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->

        <!-- add category -->
        <form wire:submit.prevent="submitCategory" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات دسته موضوعی جدید</h2>
                </div>
                @if (Session::has('new_category_message'))
                    <div class="row">
                        <div class="alert alert-success col-md-12">
                            {{ session('new_category_message') }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>عنوان دسته</label>
                            <input type="text" class="form-control" wire:model="category_title" >
                        </div>
                    </div>
                </div>

            </div>
            <!-- /box_general-->
            <p><button type="submit" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- end add category -->
    </div>
</div>
