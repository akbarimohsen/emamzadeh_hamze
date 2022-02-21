<div>
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>دوره {{ $course->title }}</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
                     {{-- sidebar --}}
                     @livewire("education.course-sidebar-component", ['course' => $course])
					<div class="col-lg-8">
                        <section>
                            <div class="card">
                                <div class="card-header font-weight-bold" >
                                    {{ $quiz->title }}
                                </div>
                                <div class="card-body shadow-lg">
                                    {{ $quiz->description }}
                                </div>
                                <ul class="font-weight-bold">
                                    <li> تعداد سوالات : {{ $quiz->questions->count() }} </li>
                                    <li> زمان مسابقه (به ثانیه ) : {{ $quiz->time }} </li>
                                    @if ($score != -1)
                                        <li> نمره از {{ $quiz->total_mark }} : {{ $quiz->total_mark * $score   }}</li>
                                    @endif
                                </ul>

                                <p class="text-weight-bold">
                                    مراقب باشید که تنها یکبار قادر به شرکت در کوییز خواهید بود.
                                </p>

                                @if(Session::has('quiz_message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('quiz_message') }}
                                    </div>
                                @endif
                                @if (Session::has('middleware_message'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('middleware_message') }}
                                    </div>
                                @endif
                                <a href="{{ route('education.quiz.enter', ['id1' => $course->id, 'id2' => $heading->id, 'id3' => $quiz->id ]) }}" class="btn btn-primary ">ورود به کوییز</a>
                            </div>
                        </section>

						<!-- /section -->

					</div>
					<!-- /col -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
</div>
