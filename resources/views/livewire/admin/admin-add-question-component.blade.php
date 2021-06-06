<div>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">داشبورد</a>
          </li>
          <li class="breadcrumb-item active">سوالات </li>
        </ol>
        <form wire:submit.prevent="submit" >
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>افزودن سوال جدید به مسابقه <strong style="color:seagreen">{{ $contest->title }}</strong></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>صورت سوال</label>
                            <textarea class="form-control" rows="5" wire:model.lazy="question"></textarea>
                        </div>
                    </div>
                </div>
                <!-- answers -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>گزینه ۱   </label>
                            <textarea class="form-control" rows="5" wire:model.lazy="answer1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>گزینه ۲   </label>
                            <textarea class="form-control" rows="5" wire:model.lazy="answer2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>گزینه ۳   </label>
                            <textarea class="form-control" rows="5" wire:model.lazy="answer3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>گزینه ۴   </label>
                            <textarea class="form-control" wire:model.lazy="answer4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>پاسخ اصلی (لطفا شماره گزینه را وارد کنید)   </label>
                            <input type="number" min="1" max="4" class="form-control" wire:model.lazy="real_answer">
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /box_general-->
            <p><button href="#0" class="btn_1 medium">ذخیره</button></p>
            </div>
        </form>
        <!-- /.container-fluid-->
         </div>

</div>

