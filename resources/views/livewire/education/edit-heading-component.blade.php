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
        @if(Session::has('editHeading'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'تغییر سرفصل',
                    text: '{{ Session::get("editHeading") }}'
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
                                <div class="card-header font-weight-bold" >
                                    تغییر سرفصل {{ $course->title }}
                                </div>
                                <div class="card-body shadow-lg" style="background-color: #3f9fff">
                                    <form wire:submit.prevent="submit">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">عنوان سرفصل</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="{{ $heading->title }}" wire:model.defer="title" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="تغییر سرفصل">
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
