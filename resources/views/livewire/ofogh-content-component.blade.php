<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax13.jpg')}});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>{{ $content->title }}</h2>
                    <ul class="breadcrumbs pt-5">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('ofogh') }}" title="">مرکز افق</a></li>
                        <li>{{ $content->title }}</li>
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
                                    {{-- <h4>جستجو</h4>
                                    <form class="srch-frm">
                                        <input type="text" placeholder="جستجو کنید ...">
                                        <button type="submit" class="thm-clr"><i class="fa fa-search"></i></button>
                                    </form> --}}
                                </div>
                                <div class="wdgt-box">
                                    <h4>دسته بندی</h4>
                                    <ul class="cat-lst">
                                        @foreach ($categories as $category )
                                            <li><a href="{{ route('ofogh.categories' , ['category_id' => $category->id]) }}" title="">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="wdgt-box">
                                    <h4>آخرین مطالب</h4>
                                    <div class="rcnt-wrp">
                                        @foreach ($last_contents as $c )
                                            <div class="rcnt-bx">
                                                <a href="{{ route('ofogh.content' , ['id' => $c->id]) }}" title=""><img src={{ asset("assets/images/contents/$c->image") }} width="60px" height="20px" alt="rcnt-img1.jpg"></a>
                                                <div class="rcnt-inf">
                                                    <h6><a href="{{ route('ofogh.content' , ['id' => $c->id]) }}" title="">{{ $c->title }}</a></h6>
                                                    <span class="thm-clr"><i class="fa fa-calendar-o"></i> {{ $c->created_at->format('H:i:s') }} </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="blog-detail">
                                <div class="blog-detail-inf brd-rd5">
                                    <img src={{ asset("assets/images/contents/$content->image") }} alt="blog-detail-img.jpg">
                                    <div class="blog-detail-inf-inr">
                                        <h4>{{ $content->title }}</h4>
                                        <ul class="pst-mta">
                                            <li><i class="fa fa-calendar-o thm-clr"></i>{{ $content->created_at->format('m/d/Y') }}</li>
                                            <li><i class="fa fa-user-o thm-clr"></i>{{ $content->user->name }}</li>
                                            <li><i class="fa fa-clock-o thm-clr"></i>{{ $content->created_at->format('H:i:s') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <blockquote class="brd-rd5"><p>{{ $content->short_description }}</p></blockquote>
                                    <p>{!! $content->description !!}</p>
                                    <div class="pst-shr-tgs">
                                        <div class="team-scl float-left">
                                            <span>اشتراک مطلب: </span>
                                            <a href="blog-detail.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="blog-detail.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="blog-detail.html#" title="لینکدین" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a href="blog-detail.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                        <div class="tag-clouds float-right">
                                            <span>برچسب ها: </span>
                                            <a href="blog-detail.html#" title="">نماز</a>، <a href="blog-detail.html#" title="">روزه</a>، <a href="blog-detail.html#" title="">حج</a>، <a href="blog-detail.html#" title="">زکات</a>
                                        </div>
                                    </div>
                                    <div class="cmts-wrp">
                                        <h3>دیدگاه ها </h3>
                                        @if(Session::has('message'))
                                           <script>
                                           Swal.fire({
                                            icon: 'success',
                                            title: 'ثبت نظر',
                                            text: '{{ Session::get("message") }}'
                                          })
                                          </script>
                                        @endif
                                         <ul class="cmt-thrd">
                                                @foreach ($content->comments as $comment)
                                                    <li>
                                                        @if ($comment->confirm == 1)
                                                            <div class="cmt-bx">
                                                                <img class="brd-rd50" src={{ asset("assets/images/resources/cmt-img.png") }} alt="cmt-img1.jpg">
                                                                <div class="cmt-inf">
                                                                    <h6>{{ $comment->user_name }}</h6>
                                                                    <span>{{ $comment->created_at->format('m/d/Y') }}</span>
                                                                    <p itemprop="description">{{ $comment->description }}</p>
                                                                    <a class="comment-reply-link thm-clr" href="blog-detail.html#" title="">پاسخ</a>
                                                                </div>
                                                            </div>
                                                            <ul class="children">
                                                                <li>
                                                                    @foreach ($comment->answers as $answer)
                                                                        <div class="cmt-bx">
                                                                            <img class="brd-rd50" src={{ asset("assets/images/resources/cmt-img.png") }} alt="cmt-img2.jpg">
                                                                            <div class="cmt-inf">
                                                                                <h6>{{ $answer->name }}</h6>
                                                                                <span>{{ $answer->created_at->format('m/d/Y') }}</span>
                                                                                <p>{{ $answer->description }}</p>
                                                                                {{-- <a class="comment-reply-link thm-clr" href="blog-detail.html#" title="">پاسخ</a> --}}
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        @endif
                                                     </li>
                                                @endforeach
                                        </ul><!-- Comment Thread -->
                                    </div><!-- Comments Wrap -->
                                    <div class="cnt-frm cmt-frm">
                                        <h3>ارسال دیدگاه</h3>
                                        <form wire:submit.prevent="sendComment" method="POST">
                                            @csrf
                                            <div class="row mrg20">
                                                <div class="col-md-4 col-sm-6 col-lg-4 mt-3">
                                                    <input type="text" placeholder="نام" wire:model.lazy="user_name">
                                                    @error('user_name')
                                                        <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4 mt-3">
                                                    <input type="email" placeholder="ایمیل" wire:model.lazy="email">
                                                    @error('email')
                                                        <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-lg-4 mt-3">
                                                    <input type="text" placeholder="موضوع" wire:model.lazy="title">
                                                    @error('title')
                                                        <span class="alert alert-danger ">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 mt-3">
                                                    <textarea placeholder="پیام شما" wire:model.lazy="description" ></textarea>
                                                    @error('description')
                                                        <span class="alert alert-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 mt-3">
                                                    <button type="submit" class="thm-btn brd-rd40">ارسال نظر</button>
                                                </div>
                                            </div>
                                        </form>
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
