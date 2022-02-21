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

        @if(Session::has('deleteMessage'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'حذف سرفصل',
                                text: '{{ Session::get("deleteMessage") }}'
                            }).then( (result) => {
                                location.reload();
                            } )
                            </script>
        @endif

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
                        @if($quiz->questions->count() > 0)
                            <ul>
                                @foreach($quiz->questions as $question)
                                        <li>
                                            <div class="alert alert-info">
                                                <h5>{{ $question->question }}</h5>

                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="radio" name="answer{{$question->id}}" value="1" disabled @if($question->real_answer == 1)  checked="checked" @endif>
                                                            <label>{{ $question->answer1 }} </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="radio" name="answer{{$question->id}}" value="2" disabled @if($question->real_answer == 2)  checked="checked" @endif>
                                                            <label>{{ $question->answer2 }} </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="radio" name="answer{{$question->id}}" value="3" disabled @if($question->real_answer == 3)  checked="checked" @endif>
                                                            <label>{{ $question->answer3 }} </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="radio" name="answer{{$question->id}}" value="4" disabled @if($question->real_answer == 4)  checked="checked" @endif>
                                                            <label>{{ $question->answer4 }} </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mt-4">
                                                    <a href="#" class="btn btn-danger" wire:click.prevent="delete({{ $question->id }})" >حذف</a>
                                                </div>
                                            </div>

                                        </li>
                                @endforeach
                            </ul>
                        @else
                        <div class="alert alert-info">
                            هیچ سوالی یافت نشد !!!
                        </div>
                        @endif

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









{{--
<div>
    <li>
        <h5>{{ $question_box->question }}</h5>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="1" disabled @if($question_box->real_answer == 1)  checked="checked" @endif>
                    <label>{{ $question_box->answer1 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="2" disabled @if($question_box->real_answer == 2)  checked="checked" @endif>
                    <label>{{ $question_box->answer2 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="3" disabled @if($question_box->real_answer == 3)  checked="checked" @endif>
                    <label>{{ $question_box->answer3 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="4" disabled @if($question_box->real_answer == 4)  checked="checked" @endif>
                    <label>{{ $question_box->answer4 }} </label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="#" class="btn btn-danger" wire:click.prevent="delete" >حذف </a>
        </div>
    </li>
    <hr>
</div> --}}
