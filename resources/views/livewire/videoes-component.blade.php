<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax12.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1 style="color:white;">فیلم ها </h1>
                    <h2>فیلم ها</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>فیلم ها </li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="prtfl-wrap text-center">

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
