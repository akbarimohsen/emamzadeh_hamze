<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax16.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h2>مسابقه</h2>
                    <ul class="breadcrumbs">
                        <li><a href="#" title="">صفحه اصلی</a></li>
                        <li><a href="#" title=""></a></li>
                        <li>مسابقه</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-detail-wrp">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="wdgt-box">
                                    <h4>زمان باقی مانده : </h4>
                                    <div class="time-counter">
                                        <p id="time_counter" style="font-size: 20pt;color:red;"></p>
                                    </div>
                                    <script>
                                        var end = new Date("{{ $end_exam_time }}").getTime();
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
                                                    document.getElementById("end_contest").click();
                                                }

                                            },1000)
                                    </script>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="row">
                                <!-- livewire Component -->

                                <ul>
                                    @foreach($questions as $q)
                                        <li>
                                            @livewire("question-box-component" ,['question_id' => $q->id])
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-12 d-flex justify-content-center pt-4" class="li: { list-style: none; }">
                                {{ $questions->links("pagination::bootstrap-4") }}
                              </div>
                            <a href="#" id="end_contest" wire:click ="endContest" style="float: right;" class="btn btn-primary">اتمام آزمون</a>
                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>


