<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/resources/slide1.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                <h2>احادیث و قرآن</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('quranAndHadis') }}" title="">احادیث و قرآن</a></li>
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
                            <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="wdgt-box">
                                    <h4>دسته بندی </h4>
                                        <div class="dropdown show">
                                            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            انتخاب کنید
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @foreach ($categories as $category )
                                                    <a class="dropdown-item" style="text-align: right;" href="#" wire:click="set_category({{$category->id}})">{{ $category->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                </div>

                            </div><!-- Sidebar Wrap -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="blog-detail">
                                <div class="row">
                                    @foreach ($hekmats as $hekmat)
                                        <div class="col-md-12">
                                            <div class="card text-white bg-info mb-3">
                                                <div class="card-header" style="color: white">{{ $hekmat->header }}</div>
                                                <div class="card-body">
                                                <h5 class="card-title" style="color: white">{{ $hekmat->title }}</h5>
                                                <p class="card-text" style="color: white; font-weight: bold;">{{ $hekmat->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{$hekmats->links("pagination::bootstrap-4")}}

                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>

