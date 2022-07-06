<div>
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
                    <div class="row d-flex justify-content-center m-0">
                        <div class="col-sm-12 col-lg-6 col-md-6 d-flex justify-content-between align-items-center ">
                            <span class="mx-5"> موضوع موردنظر خود را انتخاب کنید :  </span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if( $current_category == null )
                                        انتخاب موضوع
                                    @else
                                        {{ $current_category->title }}
                                    @endif
                                </button>
                                <div class="dropdown-menu pre-scrollable">
                                  @foreach ($categories as $category )
                                    <a class="dropdown-item" href="#" wire:click="setCategory({{ $category->id }})">{{ $category->title }}</a>
                                    <div class="dropdown-divider"></div>
                                  @endforeach
                                </div>
                              </div>
                        </div>
                    </div>
                    <hr>
                    {{-- <div class="row">
                            @foreach ($cards as $card )
                                <div class="card col-3">
                                    <img class="card-img-top" src={{ asset("assets/images/signs/$card->picture") }} alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title" dir="rtl" style="float: right;">{{ $card->title }}</h5>
                                        <p class="card-text" dir="rtl" style="float: right; color:#6FB2D2;">{{ $card->ayeh }}</p>
                                        <p class="card-text" dir="rtl"  style="float: right; color:#019267;">{{ $card->translation }}</p>
                                    </div>
                                </div
                            @endforeach
                    </div> --}}
                    <div class="event-wrap">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="remove-ext3">
                                    <div class="row">

                                        @foreach ($cards as $card )
                                            <div class="col-md-4 col-sm-6 col-lg-3">
                                                <div class="event-box2">
                                                    <div class="event-thumb">
                                                        <a href="#" title=""><img src={{ asset("assets/images/signs/$card->picture") }}></a>
                                                    </div>
                                                    <div class="event-info">
                                                        <h4><a href="" title="">{{ $card->title }}</a></h4>
                                                        <p style="color: #6FB2D2">{{ $card->ayeh }}</p>
                                                        <p style="color: #019267" >{{ $card->translation}}</p>
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
</div>
