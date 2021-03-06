<div>
    <section>
        <div class="container mt-1">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src={{ asset('assets/images/resources/emamzadeh.png')  }} alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src={{ asset('assets/images/resources/slider.jpg')  }} alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src={{ asset('assets/images/resources/ghadir.jpg')  }} alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        @livewire('speeches-home-component')
    </section>

    <section>
        <div class="container mt-5">
                <div>
                    <h2 style="text-align: center; padding-bottom:10px;" >
                        آخرین اخبار
                    </h2>
                </div>
                <ul class="list-unstyled mt-4 ">
                    @foreach ($news as $n)
                        <li class="media py-3 mt-1 shadow bg-white">
                            <img class="ml-3" src={{ asset("assets/images/News/home/$n->image") }} alt="امامزاده حمزه (ع)">
                            <div class="media-body" style="text-align: right;">
                                <h5 class="mt-0 mb-1" style="text-align: right;">{{ $n->title }}</h5>
                                <p>{!! $n->short_description  !!} </p>
                                <br>
                                <a href="{{ route("news", ['id' => $n->id]) }}" class="btn btn-info btn-sm">ادامه خبر</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title2 text-center">
                    <div class="sec-title-inner2">
                        <span>خدمات بشر دوستانه</span>
                        <h3>خدمات ما</h3>
                    </div>
                </div>
                <div class="serv-wrap text-center remove-ext3">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box2">
                                <i class="flaticon-quran-rehal"></i>
                                <div class="srv-info2">
                                    <h4>آموزش قرآن  و حدیث</h4>
                                    <p>هر روز برای اطلاع و افزایش آگاهی مردم احادیث و آیات مهم به همراه تفسیر آن در اینجا قرار خواهد گرفت.</p>
                                    <a href="{{ route('quranAndHadis') }}" title="">بیشتر بدانید<i class="flaticon-left-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box2">
                                <i class="flaticon-heart-1"></i>
                                <div class="srv-info2">
                                    <h4>خدمات فرهنگی و خیریه</h4>
                                    <p>ما در امامزاده با برگزاری انواع مراسمات فرهنگی و مذهبی به بزرگتر شدن این خانواده کمک خواهیم کرد. </p>
                                    <a href="{{ route('farhangServices') }}" title="">بیشتر بدانید<i class="flaticon-left-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box2">
                                <i class="flaticon-mosque"></i>
                                <div class="srv-info2">
                                    <h4>ساخت شبستان</h4>
                                    <p>ما در امامزاده حمزه(ع) با کمک های مردمی شما عزیزان در حال ساخت شبستان این آستان مقدس  هستیم..</p>
                                    <a href="{{ route('constructionNave') }}" title="">بیشتر بدانید<i class="flaticon-left-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box2">
                                <i class="flaticon-social-care"></i>
                                <div class="srv-info2">
                                    <h4>کمک به فقرا</h4>
                                    <p>یکی از کارهای مهمی که با کمک های شما عزیزان ما در این مرکز فرهنگی انحام می دهیم, کمک به مستضعفین حفظ حقوق آن ها می باشد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Serv Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap remove-gap three-block-section">
            <div class="sec-title2 text-center">
                <div class="sec-title-inner2">
                    <span>هدیه ای برای تو</span>
                    <h3>کاری که میکنیم</h3>
                </div>
            </div>
            <div class="fea-car text-center">
                <div class="row mrg">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="fea-itm" style="background-image: url({{ asset('assets/images/resources/fea-img1.jpg') }});">
                            <i class="flaticon-reading-quran"></i>
                            <div class="fea-info2">
                                <h4>آموزش قرآن و حدیث</h4>
                                <p></p>
                                {{-- <a href="index.html#" title="">بیشتر بدانید</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="fea-itm" style="background-image: url({{ asset('assets/images/resources/fea-img2.jpg')}});">
                            <i class="flaticon-museum"></i>
                            <div class="fea-info2">
                                <h4>برگزاری مسابقه</h4>
                                <p></p>
                                <a href="{{ route('contests') }}" title="">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="fea-itm" style="background-image: url({{ asset('assets/images/resources/fea-img3.jpg')}});">
                            <i class="flaticon-heart-1"></i>
                            <div class="fea-info2">
                                <h4>کمک به یکدیگر و همدلی</h4>
                                <p></p>
                                {{-- <a href="index.html#" title="">بیشتر بدانید</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="gap">
            <div class="container">
                <div class="evnt-pry-wrap">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-title">
                                <div class="sec-title-inner">
                                    <h3>رویداد های اخیر</h3>
                                </div>
                            </div>
                            <div class="evnt-wrap remove-ext5" style="background-color: #5CAB4B;">
                                <div class="row mrg20 m-5">
                                    @foreach ($events as $event )
                                        <div class="col-md-3 col-sm-3 col-lg-3 rounded" style="background-color: white;">
                                            <div class="evnt-box">
                                                <div class="evnt-thmb">
                                                    <img src={{ asset("assets/images/events/$event->image") }} alt="evnt-img1.jpg" class="rounded">
                                                </div>
                                                <div class="evnt-info">
                                                    <h4>{{ $event->title }}</h4>
                                                    <ul class="event-mta mt-2">
                                                        <li><i class="fa fa-map-marker"></i>شهرستان زرند - آستان مقدس امامزاده حمزه</li>
                                                        <li><i class="flaticon-clock"></i>{{ Hekmatinasser\Verta\Facades\Verta::instance($event->date_event )->format('Y-n-j H:i')}}</li>
                                                    </ul>
                                                    <a href="{{ route('events') }}" class="btn btn-info btn-sm" style="float: left;">اطلاعات بیشتر</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div><!-- Events Wrap -->
                        </div>
                    </div>
                </div><!-- Events & Prayer Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap white-layer opc9">
            <div class="fixed-bg ptrn-bg" style="background-image: url({{ asset('assets/images/pattern-bg.jpg')}});"></div>
            <div class="container">
                <div class="sec-title2 text-center">
                    <div class="sec-title-inner2">
                        <h3>آخرین تصاویر</h3>
                    </div>
                </div>
                <!-- start -->
                <div class="bord-wrap">
                    <div class="row mrg">
                        @foreach ($pictures as $pic)
                            <div class="col-md-3 col-sm-6 col-lg-3 m-1">
                                <div class="bord-box">
                                    <img src={{ Storage::url($pic->image) }} alt="bord-img1.jpg">
                                    <div class="bord-info">
                                        <h4>{{ $pic->name }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap thm-layer opc9">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax7.jpg')}});"></div>
            <div class="container">
                <div class="nwsltr-wrp text-center">
                    <div class="nwsltr-innr">
                        <div class="nwsltr-title">
                            <h3>عضویت در خبرنامه واتساپ</h3>
                            <span>دریافت آخرین اخبار، رویداد ها و مراسمات</span>
                        </div>
                        <a href="https://chat.whatsapp.com/LoWfA55gw820aUAHOfuvPE" class="btn btn-secondary mt-2">عضویت در خبرنامه</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
