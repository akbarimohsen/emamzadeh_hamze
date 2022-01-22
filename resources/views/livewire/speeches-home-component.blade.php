<div>
    <div class="container mt-5">
        <div>
            <h2 style="text-align: center; padding-bottom:10px;" >
                آخرین سخنرانی ها
            </h2>
        </div>
        <div class="p-3 rounded shadow mb-5">
            <!-- Bordered tabs-->
            <ul id="myTab1" role="tablist" class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center" style="padding-right: 0px; " >
                <li class="nav-item flex-sm-fill">
                    <a id="day1-tab" data-toggle="tab" href="#day1" role="tab" aria-controls="day1" aria-selected="true" class="nav-link text-uppercase font-weight-bold rounded-0 border ">شنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day2-tab" data-toggle="tab" href="#day2" role="tab" aria-controls="day2" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">یکشنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day3-tab" data-toggle="tab" href="#day3" role="tab" aria-controls="day3" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">دوشنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day4-tab" data-toggle="tab" href="#day4" role="tab" aria-controls="day4" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">سه شنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day5-tab" data-toggle="tab" href="#day5" role="tab" aria-controls="day5" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">چهارشنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day6-tab" data-toggle="tab" href="#day6" role="tab" aria-controls="day6" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">پنج شنبه</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="day7-tab" data-toggle="tab" href="#day7" role="tab" aria-controls="day7" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">جمعه</a>
                </li>
            </ul>
            <div id="myTab1Content" class="tab-content">
                <div id="day1" role="tabpanel" aria-labelledby="day1" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day1'])
                </div>
                <div id="day2" role="tabpanel" aria-labelledby="day2" class="tab-pane fade px-4 py-5 ">
                    @livewire('speech-box-component',['day' => 'day2'])
                </div>
                <div id="day3" role="tabpanel" aria-labelledby="day3" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day3'])
                </div>
                <div id="day4" role="tabpanel" aria-labelledby="day4" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day4'])
                </div>
                <div id="day5" role="tabpanel" aria-labelledby="day5" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day5'])
                </div>
                <div id="day6" role="tabpanel" aria-labelledby="day6" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day6'])
                </div>
                <div id="day7" role="tabpanel" aria-labelledby="day7" class="tab-pane fade px-4 py-5">
                    @livewire('speech-box-component',['day' => 'day7'])
                </div>
            </div>
            <!-- End bordered tabs -->
        </div>

</div>
