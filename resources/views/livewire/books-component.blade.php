<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax12.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    {{-- <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1> --}}
                    <h2>کتاب ها</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>کتاب ها </li>
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

                                    @foreach ($books as $book )
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="#" title=""><img src={{ asset("assets/images/Books/$book->image") }} alt="event-img2-1.jpg"></a>
                                                <div class="event-info">
                                                    <h4><a href="event.html#" title=""> نام کتاب : {{ $book->name }}</a></h4>
                                                    <h5 class="mt-1">نویسنده : {{ $book->title }}</h5>
                                                    <p>توضیحات : {{ $book->title }}</p>
                                                    <button type="button" class="btn btn-primary mt-3" wire:click="download({{$book->id}})">دانلود</button>
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
