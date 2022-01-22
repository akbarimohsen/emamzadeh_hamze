<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax13.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>{{ $days[$day] }}</h2>
                    <ul class="breadcrumbs pt-5">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('ofogh') }}">سخنرانی ها</a></li>
                        <li>{{ $days[$day] }}</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-wrap remove-ext7">
                    @if(Session::has('message'))
                            <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'حذف مطلب',
                                        text: '{{ Session::get("message") }}'
                                        })
                            </script>
                    @endif
                    <div class="row mrg40">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="wdgt-box">
                                    <h4>روز ها</h4>
                                    <ul class="cat-lst">
                                        @foreach ($days as $d => $title )
                                            <li><a href="{{ route("speeches.show", ['day' => $d]) }}" title="">{{ $title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="row">
                                    @foreach ($contents as $content)
                                        <div class="col-md-6 col-sm-6 col-lg-4 fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                                            <div class="blog-box">
                                                <div class="blog-thmb">
                                                    <a href="{{ route('ofogh.content' , ['id' => $content->id]) }}" title=""><img src={{ asset("assets/images/speeches/$content->image") }} alt="post-img1.jpg"></a>
                                                </div>
                                                <div class="blog-info">
                                                    {{-- <ul class="pst-mta2">
                                                        @if (!is_null($content->categories))
                                                            @foreach ($content->categories as $category )
                                                                <li><a href="{{ route('ofogh.categories',['category_id' => $category->id]) }}" title="">{{ $category->name }}</a></li>
                                                            @endforeach
                                                        @endif
                                                    </ul> --}}
                                                    <h5> {{ $content->title }} </h5>
                                                    <p>{{ $content->short_description }}</p>

                                                    <a href="{{ route('ofogh.content',['id' => $content->id]) }}" class="mt-2" title="">بیشتر بخوانید</a>
                                                    @auth
                                                        @if(Auth::user()->utype == "ADM")
                                                            <a href="#" class="btn btn-danger btn-sm" wire:click="delete({{$content->id}},'content')" style="float: left;" >حذف</a>
                                                            <a href="{{ route('admin.editContent',['id' => $content->id]) }}" class="btn btn-primary btn-sm mx-1" style="float: left;" >تغییر</a>
                                                        @endif
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- Blog Wrap -->
                <div class="pagination-wrap text-center">
                    {{ $contents->links('pagination::bootstrap-4') }}
                </div><!-- Pagination Wrap -->
            </div>
        </div>
    </section>
</div>
