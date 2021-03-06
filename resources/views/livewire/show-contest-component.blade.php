<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax16.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>{{ $contest->title }}</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}" title="">صفحه اصلی</a></li>
                        <li><a href="{{ route('contests') }}" title="">مسابقات</a></li>
                        <li>{{ $contest->title }}</li>
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
                                    <h4>آخرین مسابقات</h4>
                                    <div class="rcnt-wrp">
                                        @foreach ($last_contests as $c)
                                            <div class="rcnt-bx">
                                                <a href="{{ route('showContest' , ['contest_id' => $c->id]) }}" title=""><img src={{ asset("assets/images/contests/$c->image") }} width="60px" height="20px" alt="rcnt-img1.jpg"></a>
                                                <div class="rcnt-inf">
                                                    <h6><a href="{{ route('showContest' , ['contest_id' => $c->id]) }}" title="">{{ $c->title }}</a></h6>
                                                    <span class="thm-clr"><i class="fa fa-calendar-o"></i>{{ Hekmatinasser\Verta\Facades\Verta::instance($contest->start )->format('Y-n-j H:i')}} </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="blog-detail">
                                @if (Session::has("middleware_message"))
                                    <div class="alert alert-danger">شما قبلا یک بار وارد آزمون شده اید.</div>
                                @endif
                                @if(Session::has('contest_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('contest_message') }}
                                </div>
                                @endif
                                <div class="blog-detail-inf brd-rd5">
                                    <img src={{ asset("assets/images/contests/$contest->image") }} alt="blog-detail-img.jpg">
                                    <div class="blog-detail-inf-inr">
                                        <h4>نام مسابقه : {{ $contest->title }}</h4>
                                        <ul class="pst-mta">
                                            <li><i class="fa fa-calendar-o thm-clr"></i>{{ Hekmatinasser\Verta\Facades\Verta::instance($contest->start )->format('Y-n-j')}}</li>
                                            <li><i class="fa fa-clock-o thm-clr"></i>{{ Hekmatinasser\Verta\Facades\Verta::instance($contest->start )->format('H:i')}}</li>
                                            @if ($now->lessThan($start))
                                                <li><div class="alert alert-primary">مسابقه هنوز آغاز نشده است.</div></li>
                                            @elseif($now->greaterThan($end))
                                                <li><div class="alert alert-primary">مسابقه به پایان رسیده است.</div></li>
                                                <li><a href="{{ route('contest.scoreboard',['contest_id' => $contest_id ]) }}" class="btn btn-success">جدول امتیازات</a></li>
                                            @else
                                                @auth
                                                    @if(Auth::user()->is_confirm == 0)
                                                        <li>
                                                            <div class="alert alert-info">
                                                                شماره موبایل شما فعال نشده است. برای فعالسازی
                                                                <a href="{{ route('user.phoneAuthentication') }}" class="btn btn-primary btn-sm">اینجا</a>
                                                                کلیک کنید.
                                                            </div>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enterContest">
                                                                ورود به مسابقه
                                                            </button>
                                                            {{-- <p> تا اطلاع ثانوی سیستم به دلیل به روز رسانی, غیرفعال  می باشد </p> --}}
                                                        </li>
                                                    @endif
                                                @else
                                                    <li><p>ابتدا باید <a href="{{ route('register') }}" style="color:blue;">ثبت نام</a> یا <a href="{{ route('login') }}" style="color:blue;">وارد</a> سایت شوید</p></li>
                                                @endauth

                                                <li><a href="{{ route('contest.scoreboard',['contest_id' => $contest_id ]) }}" class="btn btn-success">جدول امتیازات</a></li>
                                            @endif
                                       </ul>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="enterContest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">توجه</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                              شما تنها یک بار قادر خواهید بود که وارد مسابقه شوید.
                                              <br>
                                              آیا برای ورود به مسابقه مطمئن هستید ؟
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                                        <a href="{{ route('contest.enter', ['contest_id' => $contest->id]) }}" class="btn btn-success m-2" >شروع آزمون</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <h5 class="mt-3">{{ $contest->short_description }}</h5>
                                    <blockquote class="brd-rd5"><p>{{ $contest->description }}</p></blockquote>
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
                                                @foreach ($contest->comments as $comment)
                                                    <li>
                                                        @if ($comment->confirm == 1)
                                                            <div class="cmt-bx">
                                                                <img class="brd-rd50" src={{ asset("assets/images/resources/cmt-img.png") }} alt="cmt-img1.jpg">
                                                                <div class="cmt-inf">
                                                                    <h6>{{ $comment->user_name }}</h6>
                                                                    <span>{{ $comment->created_at->format('m/d/Y') }}</span>
                                                                    <p itemprop="description">{{ $comment->description }}</p>
                                                                    {{-- <a class="comment-reply-link thm-clr" href="blog-detail.html#" title="">پاسخ</a> --}}
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

