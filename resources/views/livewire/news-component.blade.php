<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax2.png') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1></h1>
                    <h2>خبر</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('news',['id' => $news->id]) }}" title="">خبر</a></li>
                        <li>{{ $news->title }}</li>
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
                                <img src={{ asset("assets/images/News/$news->image")}} alt="blog-detail-img.jpg">
                                <div class="blog-detail-inf-inr">
                                    <h4>{{ $news->title }}</h4>
                                </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <p>
                                        {!! $news->description !!}
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


