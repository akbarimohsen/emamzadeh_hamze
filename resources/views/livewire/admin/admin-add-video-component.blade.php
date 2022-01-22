<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">افزودن </li>
        </ol>
        <form wire:submit.prevent="submit" method="POST">
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

                        <div class="form-group">
                            <label>عنوان ویدیو </label>
                            <input  class="form-control" wire:model.lazy="name">
                        </div>

                        <div class="form-group">
                            <label>توضیحات </label>
                            <textarea rows="5" class="form-control" style="height:100px;" wire:model.lazy="description" ></textarea>
                        </div>

                        <div class="row mt-3 mb-2">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="is_speech" checked>
                                    <label class="form-check-label pr-5" for="exampleCheck1">آیا این ویدیو در قسمت سخنرانی ها گذاشته شود ؟</label>
                                </div>
                            </div>
                        </div>

                        @if($is_speech == 1)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group col-md-4">
                                    <label>روز سخنرانی</label>
                                    <select class="form-control" wire:model="day_of_speech">
                                      <option value="day1" selected>شنبه</option>
                                      <option value="day2">یکشنبه</option>
                                      <option value="day3">دوشنبه</option>
                                      <option value="day4">سه شنبه</option>
                                      <option value="day5">چهارشنبه</option>
                                      <option value="day6">پنج شنبه</option>
                                      <option value="day7">جمعه</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <!-- /box_general-->
            <p><button type="submit" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->
         </div>

</div>
