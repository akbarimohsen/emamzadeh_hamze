<div>
    <div>
        <div>
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">داشبورد</a>
                  </li>
                  <li class="breadcrumb-item active">افزودن دسته جدید</li>
                </ol>
                <form wire:submit.prevent="submit" >
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-file"></i>افزودن</h2>
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
                                    <label>نام دسته</label>
                                    <input type="text" class="form-control" wire:model="name">
                                </div>
                                @error('name')
                                    <span class="alert alert-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /row-->
                    </div>
                    <!-- /box_general-->
                    <p><button type="submit" href="#0" class="btn_1 medium">ذخیره</button></p>
                    </div>
                </form>
                <!-- /.container-fluid-->
                 </div>
        </div>
    </div>

</div>
