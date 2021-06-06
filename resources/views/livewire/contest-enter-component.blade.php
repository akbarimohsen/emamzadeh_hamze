<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax13.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src={{ asset("assets/images/resources/page-title-ayat.png") }} alt="page-title-ayat.png"></h1>
                    <h2>عنوان پست</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li><a href="blog.html" title="">بلاگ</a></li>
                        <li>عنوان پست</li>
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
                            <a href="#" wire:click ="endContest" style="float: right;" class="btn btn-primary">اتمام آزمون</a>
                        </div>

                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
</div>


