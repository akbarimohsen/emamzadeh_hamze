<div>
    <div>
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">داشبورد</a>
            </li>
            <li class="breadcrumb-item active">افزودن دوره</li>
          </ol>
        <form wire:submit.prevent="submit">
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>اطلاعات پایه</h2>
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
                            <label>عنوان دوره</label>
                            <input type="text" class="form-control" placeholder="عنوان دوره" wire:model="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>قیمت دوره</label>
                            <input type="text" class="form-control" placeholder="قیمت دوره" wire:model="price" >
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>شروع دوره</label>
                            <input type="datetime-local" wire:model.lazy="start_date">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>نام مدرس</label>
                            <select wire:model="teacher_id">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>تصویر</label>
                            <input type="file" wire:model="image">
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>

            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file-text"></i>توضیحات</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>خلاصه توصیحات</label>
                            <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="short_description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات دوره</label>
                            <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="description"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>

            <!-- /box_general-->
            <p><button type="submit" class="btn btn-primary" >ذخیره</button></p>
        </form>
        </div>
          <!-- /.container-fluid-->
           </div>

        <!-- /.container-wrapper-->
</div>
