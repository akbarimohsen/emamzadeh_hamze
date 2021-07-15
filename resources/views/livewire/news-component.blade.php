<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax13.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1>
                    <h2>عنوان پست</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li><a href="blog.html" title="">بلاگ</a></li>
                        <li>عنوان پست</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-detail-wrp">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="blog-detail">
                                <div class="blog-detail-inf brd-rd5">
                                <img src={{ asset("assets/images/News/$news->image") }} alt="blog-detail-img.jpg">
                                <div class="blog-detail-inf-inr">
                                    <h4>{{ $news->title }}</h4>
                                    <ul class="pst-mta">
                                        <li><i class="fa fa-calendar-o thm-clr"></i></li>
                                        <li><i class="fa fa-user-o thm-clr"></i></li>
                                        <li><i class="fa fa-clock-o thm-clr"></i></li>
                                    </ul>
                                </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <p>
                                        {{ $news->description }}
                                    </p>
                                    <div class="pst-shr-tgs">
                                        <div class="team-scl float-left">
                                            <span>اشتراک مطلب: </span>
                                            <a href="blog-detail.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="blog-detail.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="blog-detail.html#" title="لینکدین" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a href="blog-detail.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>


