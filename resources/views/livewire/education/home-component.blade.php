<div>
    <main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>دوره های آنلاین</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
                @if($courses->count() != 0)
                    @foreach($courses as $course)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="box_grid wow">
                                <figure class="block-reveal">
                                    <div class="block-horizzontal"></div>
                                    <a href="{{ route('education.showcourse', ['id' => $course->id ]) }}"><img src={{ asset("assets/images/courses/$course->image") }} class="img-fluid" alt=""></a>
                                    <div class="price">{{ $course->price }} تومان</div>
                                </figure>
                                <div class="wrapper">
                                    <h3>{{ $course->title }} </h3>
                                    <p>{{ $course->short_description }}</p>
                                </div>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li><a href="{{ route('education.showcourse', ['id' => $course->id ]) }}">مشاهده دوره</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12" >
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">هیچ دوره ای هم اکنون وجود ندارد.</h4>
                            <p>هنوز هیچ دوره ای ثبت نگردیده است بزودی دوره های جدیدتری اضافه خواهند شد.</p>
                            <hr>
                        </div>
                    </div>
                @endif
				<!-- /box_grid -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

</div>
