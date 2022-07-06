<div>
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{ $course->title }}</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav ">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">توضیحات</a></li>
						<li><a href="#lessons">دروس</a></li>
						<li><a href="#reviews">نظرات</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
                    {{-- sidebar --}}
                    @livewire("education.course-sidebar-component", ['course' => $course])

					<div class="col-lg-8">

						<section id="description">
							<h2>توضیحات</h2>
							<p>
                                <?php echo $course->description ?>
                            </p>
							<!-- /row -->
						</section>
                        @if(Session::has('message'))
                            <div class="row">
                                <span class="alert alert-success"> {{ Session::get('message') }}</span>
                            </div>
                        @endif

                        @if(Session::has('sendCommentMessage'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'ثبت نظر',
                                text: '{{ Session::get("sendCommentMessage") }}'
                            }).then( (result) => {
                                window.location = " {{ route('education.showcourse' , ['id' => $course->id ]) }} "
                            })
                            </script>
                        @endif
                        @if(Session::has('deleteHeading'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'حذف سرفصل',
                                text: '{{ Session::get("deleteHeading") }}'
                            }).then( (result) => {
                                location.reload();
                            } )
                            </script>
                        @endif
                        @if(Session::has('deleteQuiz'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'حذف کوییز',
                                text: '{{ Session::get("deleteQuiz") }}'
                            }).then( (result) => {
                                location.reload();
                            } )
                            </script>
                        @endif


                        @if(Session::has('deleteLesson'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'حذف درس',
                                text: '{{ Session::get("deleteLesson") }}'
                            }).then( (result) => {
                                location.reload();
                            } )
                            </script>
                        @endif
						<!-- /section -->


						<section id="lessons">
							<div class="intro_title">
								<h2>دروس</h2>
								<ul>
									<li> {{ $course->headings->count() }} سرفصل</li>

								</ul>
							</div>
                            @if(Session::has("NotEnterLesson"))
                                <div class="alert alert-danger text-center">
                                شما ابتدا باید دوره را خریداری کنید تا بتوانید وارد دروس و کوییز ها شوید.
                                </div>
                            @endif
							<div id="accordion_lessons" role="tablist" class="add_bottom_45">
                                @foreach($course->headings as $heading)
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <div class="row d-flex justify-content-between">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapse{{ $heading->id }}" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> {{ $heading->title }}</a>
                                                </h5>
                                                @can('delete', $heading)
                                                    <div>
                                                        <a href="{{ route('education.editHeading', ['id1' => $course->id , 'id2' => $heading->id]) }}" class="btn btn-info btn-sm" >
                                                            تغییر
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm"  wire:click="deleteHeading({{ $heading->id }})">
                                                            حذف
                                                        </button>
                                                    </div>
                                                @endcan
                                            </div>
                                        </div>
                                        <div id="collapse{{ $heading->id }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                            <div class="card-body">
                                                <div class="list_lessons">
                                                    <ul>
                                                        @foreach ($heading->lessons as $lesson)
                                                            <li><a href="{{ route('education.lesson',['id1' => $course->id, 'id2' => $heading->id, 'id3' => $lesson->id ]) }}">{{ $lesson->title }}</a>
                                                                @auth
                                                                    @if( $lesson->heading->course->teacher->id === Auth::user()->id )

                                                                    @elseif ($lesson->isRead($lesson->id, Auth::user()->id) )
                                                                        <img class="float-left bg-success rounded"  src="{{ asset('assets/images/eye.svg') }}"/>
                                                                    @else
                                                                        <img class="float-left bg-danger rounded"  src="{{ asset('assets/images/eye-closed.svg') }}"/>

                                                                    @endif
                                                                @else
                                                                    <img class="float-left bg-info rounded"  src="{{ asset('assets/images/shield-lock.svg') }}"/>
                                                                @endauth
                                                                @can('delete', $lesson)
                                                                    <span><button class="btn btn-danger btn-sm" wire:click="deleteLesson({{ $lesson->id}})">حذف  </button></span>
                                                                @endcan                                                        </li>
                                                        @endforeach
                                                        @foreach ($heading->quizzes as $quiz)
                                                            <li><a href="{{ route('education.quizDetail', ['id1' => $course->id, 'id2' => $heading->id, 'id3' => $quiz->id ]) }}" class="txt_doc"> {{ $quiz->title }}</a>

                                                                @can('update', $quiz)
                                                                    <div class="dropdown float-left">
                                                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            عملیات
                                                                        </button>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="{{ route('quiz.addquestion', ['id1' => $course->id , 'id2' => $heading->id , 'id3' => $quiz->id ]) }}">افزودن سوال</a>
                                                                            <a class="dropdown-item" href="{{ route('quiz.showQuestions' , ['id1' => $course->id , 'id2' => $heading->id , 'id3' => $quiz->id ]) }}">مشاهده سوالات</a>
                                                                            <a class="dropdown-item" href="#" wire:click="deleteQuiz({{ $quiz->id }})" >حذف کوییز</a>
                                                                        </div>
                                                                    </div>
                                                                @endcan
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="row mt-5">
                                                    @can('update', $course )
                                                        <a href="{{ route('education.addLesson', ['id1' => $course->id, 'id2' => $heading->id]) }}" class="btn btn-primary btn-sm mr-1 mt-2">افزودن ویدیو جدید</a>
                                                    @endcan

                                                    @can('update', $course )
                                                        <a href="{{ route('education.addQuiz', ['id1' => $course->id , 'id2' => $heading->id ]) }}" class="btn btn-success btn-sm mr-1 mt-2">افزودن امتحان جدید</a>
                                                    @endcan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
								<!-- /card -->
							</div>
                            @can('update', $course)
                                <div class="row">
                                    <a href="{{ route('education.addHeading', ['id' => $course->id]) }}" class="btn btn-primary btn-sm mt-2 mb-2 mr-2" > افزودن سرفصل جدید </a>
                                </div>
                            @endcan
							<!-- /accordion -->
						</section>

                        <section id="reviews">
							<h2>نظرات</h2>
							<div class="reviews-container">
                                @if( $course->comments->where('confirm', 1)->count() == 0 )
                                    <div class="alert alert-success font-weight-bold">
                                        هنوز هیچ نظری ارسال نگردیده است.
                                    </div>
                                @else
                                    @foreach ($course->comments()->where('confirm', 1)->get() as $comment )
                                            {{-- <div class="review-box clearfix">
                                                <div class="rev-content" style="background-color: #406882;">
                                                    <div class="rating" style="color: white;">
                                                        <b> {{ $comment->user_name }} </b>
                                                    </div>
                                                    <div class="rev-info" style="color: white;">
                                                        {{ $comment->title }}
                                                    </div>
                                                    <div class="rev-text" style="color: white;">
                                                        <p>
                                                            {{ $comment->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="card w-75 rounded" style="background-color: #35858B;">
                                                <div class="card-body" style="color: white;">
                                                  <h5 class="card-title" style="color: white;">{{ $comment->user_name  }}</h5>
                                                  <p class="card-text" style="color: white;">{{ $comment->description }}</p>
                                                </div>
                                              </div>
                                    @endforeach
                                @endif
								<!-- /review-box -->
							</div>

                            <div id="comments" class="mt-5">
                                @auth
                                    <h4 class="mb-4">ارسال نظر</h4>
                                    <form wire:submit.prevent="sendComment" class="mt-3">
                                        <div class="form-group">
                                            <input type="text" wire:model.lazy="title" class="form-control" placeholder="عنوان" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" wire:model.lazy="email"  class="form-control" placeholder="ایمیل" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" wire:model.lazy="description" rows="6" placeholder="پیام شما"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" id="submit2" class="btn_1 rounded add_bottom_30"> ارسال</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-info font-weight-bold p-4">
                                        شما برای ثبت نظر باید ابتدا در سیستم <a href="{{ route('login') }}" style="text-decoration: underline;">وارد</a> شوید.
                                    </div>
                                @endauth
                            </div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
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
