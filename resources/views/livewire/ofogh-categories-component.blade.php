<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url{{ asset('assets/images/parallax13.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1>
                    <h2>مطالب وبلاگ</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>مطالب وبلاگ</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-wrap remove-ext7">
                    <div class="row mrg40">
                        @foreach ($contents as $content)
                            <div class="col-md-4 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                                <div class="blog-box">
                                    <div class="blog-thmb">
                                        <a href="{{ route('ofogh.content' , ['id' => $content->id]) }}" title=""><img src={{ asset("assets/images/contents/$content->image") }} alt="post-img1.jpg"></a>
                                    </div>
                                    <div class="blog-info">
                                        <ul class="pst-mta2">
                                            @foreach ($content->categories as $category )
                                                <li><a href="{{ route('ofogh.categories' , ['category_id' => $category->id]) }}" title="">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <h4><a href="blog-detail.html" title="">{{ $content->short_description }}</a></h4>
                                        <p>{{ $content->description }}</p>
                                        <a href="{{ route('ofogh.content',['id' => $content->id]) }}" title="">بیشتر بخوانید</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Blog Wrap -->
                <div class="pagination-wrap text-center">
                    {{ $contents->links('pagination::bootstrap-4') }}
                </div><!-- Pagination Wrap -->
            </div>
        </div>
    </section>
</div>
