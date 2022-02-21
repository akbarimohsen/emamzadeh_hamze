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
                                    افزودن سرفصل جدید به بخش {{ $course->title }}
                                </div>
                                <div class="card-body shadow-lg" style="background-color: #3f9fff">
                                    <form wire:submit.prevent="submit">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">عنوان سرفصل</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"  wire:model.defer="title" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="افزودن سرفصل">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </section>
						<!-- /section -->

					</div>
					<!-- /col -->
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<figure>
								<img src="{{ asset("assets/images/courses/$course->image") }}" alt="" class="img-fluid">
							</figure>
							<div class="price">
								{{ $course->price }} تومان
							</div>
							<a href="cart-1.html" class="btn_1 full-width">افزودن به سبد خرید</a>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
</div>
