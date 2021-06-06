<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax12.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1>
                    <h2>نمونه کار ها</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>نمونه کار ها</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="prtfl-wrap text-center">
                    <ul class="fltr-lnks">
                        <li class="active"><a data-filter="*" href="portfolio.html#">همه</a></li>
                        <li><a data-filter=".fltr-itm1" href="portfolio.html#">تدریس اسلامی</a></li>
                        <li><a data-filter=".fltr-itm2" href="portfolio.html#">کتاب ها</a></li>
                        <li><a data-filter=".fltr-itm3" href="portfolio.html#">کتاب های صوتی</a></li>
                        <li><a data-filter=".fltr-itm4" href="portfolio.html#">ویدیو ها</a></li>
                    </ul>
                    <div class="prtfl-dta remove-ext1">
                        <div class="row mrg15 masonry">
                            @foreach ($videos as $video)
                                <div class="col-md-4 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="prtfl-box">
                                        <?php echo $video->iframe; ?>
                                    </div>
                                    {{-- <div class="prtfl-box">
                                        <img src={{ asset("assets/images/resources/prtfl-img2.jpg") }} alt="prtfl-img2.jpg">
                                        <div class="prtfl-info">
                                            <a href={{ asset("assets/images/resources/prtfl-img2.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                            <h4>مرکز اسلامی</h4>
                                            <span>لورم ایپسوم</span>
                                        </div>
                                    </div> --}}
                                </div>
                            @endforeach
                            {{-- <div class="col-md-4 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img1.jpg") }} alt="prtfl-img1.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img1.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img2.jpg") }} alt="prtfl-img2.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img2.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 fltr-itm fltr-itm3">
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img3.jpg") }} alt="prtfl-img3.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img3.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img4.jpg") }} alt="prtfl-img4.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img4.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img5.jpg") }} alt="prtfl-img5.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img5.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 fltr-itm fltr-itm2">
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img6.jpg") }} alt="prtfl-img6.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img6.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img7.jpg") }} alt="prtfl-img7.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img7.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 fltr-itm fltr-itm4">
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img8.jpg") }} alt="prtfl-img8.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img8.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 fltr-itm fltr-itm1 fltr-itm2 fltr-itm3 fltr-itm4">
                                <div class="prtfl-box">
                                    <img src={{ asset("assets/images/resources/prtfl-img9.jpg") }} alt="prtfl-img9.jpg">
                                    <div class="prtfl-info">
                                        <a href={{ asset("assets/images/resources/prtfl-img9.jpg") }} data-fancybox="gallery" title=""><i class="fa fa-plus"></i></a>
                                        <h4>مرکز اسلامی</h4>
                                        <span>لورم ایپسوم</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{ $videos->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
