<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax9.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1 style="color: white;">مسابقات فرهنگی </h1>
                    <h2>مسابقات</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>مسابقات</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="event-wrap">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="remove-ext3">
                                <div class="row">

                                    @foreach ($contests as $contest )
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="event.html#" title=""><img src={{ asset("assets/images/contests/$contest->image") }} alt="event-img2-1.jpg"></a>
                                                </div>
                                                <div class="event-info">
                                                    <h4><a href="event.html#" title="">{{ $contest->title }}</a></h4>
                                                    <p>{{ $contest->short_description }}</p>
                                                    <ul class="event-mta">
                                                        <li><i class="fa fa-map-marker"></i>شهرستان زرند - آستان مقدس امامزاده حمزه</li>
                                                        <li><i class="flaticon-clock"></i>زمان شروع : {{ Hekmatinasser\Verta\Facades\Verta::instance($contest->start )->format('Y-n-j H:i')}}</li>
                                                        <li><i class="flaticon-clock"></i>زمان پایان : {{ Hekmatinasser\Verta\Facades\Verta::instance($contest->end )->format('Y-n-j H:i')}}</li>
                                                        <li><a href="{{ route('showContest' , ['contest_id' => $contest->id]) }}" class="btn btn-primary">ورود به مسابقه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Event Wrap -->
            </div>
        </div>
    </section>
</div>
