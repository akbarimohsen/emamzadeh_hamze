<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax12.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    {{-- <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1> --}}
                    <h2>رویداد ها</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>رویداد ها</li>
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

                                    @foreach ($events as $event )
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="event.html#" title=""><img src={{ asset("assets/images/events/$event->image") }} alt="event-img2-1.jpg"></a>
                                                <div class="event-info">
                                                    <h4><a href="event.html#" title="">{{ $event->title }}</a></h4>
                                                    <p>{!! $event->description !!}</p>
                                                    <ul class="event-mta">
                                                        <li><i class="fa fa-map-marker"></i>شهرستان زرند - آستان مقدس امامزاده حمزه</li>
                                                        <li><i class="flaticon-clock"></i>{{ Hekmatinasser\Verta\Facades\Verta::instance($event->date_event )->format('Y-n-j H:i')}}</li>
                                                    </ul>
                                                    @auth
                                                        @can('delete', $event)
                                                            <a href="#" class="btn btn-danger" wire:click="delete({{$event->id}})" >حذف</a>
                                                        @endcan
                                                    @endauth
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

    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title style2 text-center">
                    <div class="sec-title-inner">
                        <span>تابلوی ای از </span>
                        <h3>آخرین کار های ما</h3>
                    </div>

                </div>
                <div class="bord-wrap">
                    <div class="row mrg">
                        @foreach ($last_events as $event)
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="bord-box">
                                    <img src={{ asset("assets/images/events/$event->image") }} alt="bord-img1.jpg">
                                    <div class="bord-info">
                                        <h4>{{ $event->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap blue-layer opc85">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax9.jpg);"></div>
            <div class="container">
                <div class="newsletter-wrap2 text-center">
                    <div class="newsletter-inner">
                        <div class="nwsltr-title2 text-center">
                            <h3>عضویت در خبرنامه</h3>
                            <span>دریافت آخرین اخبار، رویداد ها و مراسمات</span>
                        </div>
                        <form>
                            <input type="email" placeholder="آدرس ایمیل">
                            <button class="thm-btn" type="submit">عضویت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
