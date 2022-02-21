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
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
                            <div class="time-counter">
                                <h5>زمان باقی مانده : </h5>
                                <p id="time_counter" style="font-size: 14pt;color:red;">
                                </p>
                            </div>
                            <script>
                                    var end = new Date("{{ $end_quiz_time }}").getTime();
                                    var x = setInterval(function(){
                                        var now = new Date().getTime();
                                        distance = end - now ;
                                        var minutes  = Math.floor(distance/(60*1000));
                                        var seconds  = Math.floor((distance%(60*1000)) / 1000);
                                        document.getElementById("time_counter").innerHTML = minutes + "m "+
                                        seconds + "s";
                                        if(distance < 0)
                                        {
                                            document.getElementById("time_counter").innerHTML = "Time's up";
                                            document.getElementById("end_quiz").click();
                                        }

                                    },1000)
                            </script>
						</div>
					</aside>
					<div class="col-lg-8">
                            @if($quiz->questions->count() > 0)
                                <ul>
                                    @foreach($quiz->questions as $question)
                                        <li>
                                            @livewire("question-box-component" ,['question_id' => $question->id ])
                                        </li>
                                    @endforeach
                                </ul>
                                <button type="button" id="end_quiz" class="btn btn-success" wire:click="end_quiz" >اتمام کوییز</button>
                            @else
                            <div class="alert alert-info">
                                هیچ سوالی یافت نشد !!!
                            </div>
                            <button type="button" id="end_quiz" class="btn btn-success" wire:click="end_quiz" >اتمام کوییز</button>

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
