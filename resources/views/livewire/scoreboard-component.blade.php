<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax1.jpg')}});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>جدول امتیازات</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home')  }}" title="">صفحه اصلی</a></li>
                        <li><a href="route('contests')" title="">مسابقه</a></li>
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
                                {{-- <div class="wdgt-box">
                                    <h4>جستجو</h4>
                                    <form class="srch-frm">
                                        <input type="text" placeholder="جستجو کنید ...">
                                        <button type="submit" class="thm-clr"><i class="fa fa-search"></i></button>
                                    </form>
                                </div> --}}
                                {{-- <div class="wdgt-box">
                                    <h4>دسته بندی</h4>
                                    <ul class="cat-lst">
                                        @foreach ($categories as $category )
                                            <li><a href="{{ route('ofogh.categories' , ['category_id' => $category->id]) }}" title="">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div> --}}
                                <div class="wdgt-box">
                                    <h4>آخرین مسابقات</h4>
                                    <div class="rcnt-wrp">
                                    </div>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="blog-detail">
                                <div class="blog-detail-inf brd-rd5">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>رتبه</th>
                                                <th>نام شرکت کننده</th>
                                                <th>امتیاز از ۱۰۰</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 1; ?>
                                            @if($users)
                                                @foreach($users as $user)

                                                    <tr @if($counter <= 3) class="table-success" @elseif (Auth::user() && $user->id == Auth::user()->id) class="table-info" @endif>
                                                        <td>{{ $counter }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ ($user->correct_number / $question_numbers)*100 }}</td>

                                                        <?php $counter++ ?>
                                                    </tr>

                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <span class="alert alert-info">کسانی که در مسابقه شرکت کرده اند, اما اسمشان در اینجا دیده نمی شود متاسفانه به هیچ سوالی نتوانستند پاسخ صحیح دهند.</span>
                                    </div>
                                </div>
                                <!-- Modal -->
                            </div>
                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>

