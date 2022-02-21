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
        @if(Session::has('readLessonMessage'))
            <script>
                Swal.fire({
                    text: 'شما این درس را خواندید... حالا می خواهید چکار کنید ؟',
                    showDenyButton: true,
                    confirmButtonText: 'برو به صفحه دوره',
                    denyButtonText: `همین صفحه بمان`,
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location = " {{ route('education.showcourse', ['id' => $course->id ]) }} "
                    } else if (result.isDenied) {
                        location.reload();
                    }
                })
            </script>
        @endif
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
                     {{-- sidebar --}}
                     @livewire("education.course-sidebar-component", ['course' => $course])

					<div class="col-lg-8">
                        <section>
                            <div class="card">
                                <div class="card-header font-weight-bold" >
                                        <span>{{ $lesson->title }}<span>
                                        <span style="float: left;" >
                                            <button type="button" class="btn  @if($is_read) btn-success  @else btn-outline-info  @endif  btn-sm" wire:click="readLesson()">
                                                @if( $is_read )
                                                    خوانده شده است
                                                @else
                                                    خواندم
                                                @endif
                                            </button>
                                        </span>
                                </div>
                                <div class="card-body shadow-lg">
                                    <div class="embed-responsive embed-responsive-16by9" style="background-color: black;">
                                        <video oncontextmenu="return false"  src="{{ asset('storage/lessons/' . $lesson->video) }}" controls controlsList="nodownload" style="opacity: 1;">

                                        </video>

                                        {{-- <iframe class="embed-responsive-item" src="{{ asset('storage/lessons/' . $lesson->video) }}" allowfullscreen controls controlList="nodownload" ></iframe> --}}
                                      </div>
                                </div>
                            </div>
                        </section>

						<section class="mt-3">
							<div class="card-body shadow-lg">
								{{ $lesson->description }}
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
