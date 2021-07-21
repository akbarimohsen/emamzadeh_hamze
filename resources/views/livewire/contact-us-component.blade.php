<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax14.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>تماس با ما</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>تماس با ما</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>آگاهی پیدا کنید</span>
                        <h3>اطلاعات تماس</h3>
                    </div>
                </div>
                <div class="contact-info-wrap text-center remove-ext3">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box">
                                <i class="flaticon-location-pin"></i>
                                <strong>آدرس ما</strong>
                                <span>زرند - خیابان شهید صدوقی- آستان مقدس امامزاده حمزه(ع)</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box">
                                <i class="flaticon-call"></i>
                                <strong>تماس با ما</strong>
                                <span>موبایل: 0921 044 7107</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box">
                                <i class="flaticon-email"></i>
                                <strong>ارسال پیام</strong>
                                <a href="team.html#" title="">پشتیبانی 7/24 آماده پاسخگویی</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Info Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap no-gap">
            <div class="contact-loc" id="contact-loc"></div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>سوالی دارید؟</span>
                        <h3>ارسال پیام</h3>
                    </div>
                </div>
                @if(Session::has('message'))
                    <script>
                            Swal.fire({
                            icon: 'success',
                            title: 'پیام ارسال شد!!!',
                            text: '{{ Session::get("message") }}'
                        })
                    </script>
                @endif
                <div class="contact-form text-center">
                    <form wire:submit.prevent="submit"  method="POST">
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="نام"  wire:model.lazy="user_name" >
                                @error('user_name')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="موبایل" wire:model.lazy="mobile">
                                @error('mobile')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="email" placeholder="ایمیل" wire:model.lazy="email" >
                                @error('email')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="موضوع" wire:model.lazy="title" >
                                @error('title')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="پیام شما"  wire:model.lazy="description" ></textarea>
                                @error('description')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                                <button class="thm-btn brd-rd40" type="submit">ارسال پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
