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
        @if(Session::has('createQuestion'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'ایجاد سوال' ,
                    text: '{{ Session::get("createQuestion") }}'
                    })
                    .then( (result) => {
                        window.location = "{{ route('education.showcourse', ['id' => $course->id ]) }}"
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
                                <div class="card-header">
                                    افزودن سوال جدید به کوییز {{ $quiz->title }}
                                </div>
                                <div class="card-body shadow-lg" style="background-color: #3f9fff">
                                    <form wire:submit.prevent="submit">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">سوال</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:150px;" placeholder="توضیحات" wire:model="question"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">گزینه ی ۱</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="answer1"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">گزینه ی ۲</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="answer2"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">گزینه ی ۳</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="answer3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">گزینه ی ۴</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="answer4"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">گزینه ی صحیح</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="number" class="form-control" min="1" max="4" wire:model="real_answer">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="افزودن سوال">
                                            </div>
                                        </div>


                                    </form>
                                </div>
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
