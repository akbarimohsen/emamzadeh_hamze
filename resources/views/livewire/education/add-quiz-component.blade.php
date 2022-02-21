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
        @if(Session::has('createQuiz'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'ایجاد کوییز',
                    text: '{{ Session::get("createQuiz") }}'
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
                                    افزودن کوییز جدید به بخش {{ $heading->title }}
                                </div>
                                <div class="card-body shadow-lg" style="background-color: #3f9fff">
                                    <form wire:submit.prevent="submit">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">عنوان کوییز</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"  wire:model.defer="title" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">توضیحات کوییز</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea rows="5" class="form-control" style="height:100px;" placeholder="توضیحات" wire:model="description"></textarea>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">زمان (به ثانیه)</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" wire:model.lazy="time" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">کل نمره</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" wire:model.lazy="total_mark" >
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-success px-4" value="ذخیره مسابقه">
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
