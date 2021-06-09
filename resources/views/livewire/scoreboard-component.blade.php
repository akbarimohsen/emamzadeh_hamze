<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax13.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1>
                    <h2>عنوان پست</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li><a href="blog.html" title="">بلاگ</a></li>
                        <li>عنوان پست</li>
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
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>نام شرکت کننده</th>
                                                <th>امتیاز از ۱۰۰</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 1; ?>
                                        @foreach($users as $user)

                                        <tr @if($counter <= 3) class="table-success" @endif>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ ($user->correct_number / $question_numbers)*100 }}</td>

                                            <?php $counter++ ?>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

