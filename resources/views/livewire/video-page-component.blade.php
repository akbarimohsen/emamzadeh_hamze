<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax13.jpg')}});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>{{ $video->name }}</h2>
                    <ul class="breadcrumbs pt-5">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('videos') }}" title="">ویدیوها</a></li>
                        <li>{{ $video->name }}</li>
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
                                        <?php echo $video->iframe ?>
                                    <div class="blog-detail-inf-inr">
                                        <h4>{{ $video->name }}</h4>
                                        <ul class="pst-mta">
                                            <li><i class="fa fa-calendar-o thm-clr"></i>{{ $video->created_at->format('m/d/Y') }}</li>
                                            <li><i class="fa fa-clock-o thm-clr"></i>{{ $video->created_at->format('H:i:s') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <h5 class="mt-4"> توضیحات</h5>
                                    <p>{!! $video->description !!}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>
