<div>
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax12.jpg') }});"></div>
            <div class="container">
                <div class="page-title-wrap">
                    <h1 style="color:white;">فیلم ها </h1>
                    <h2>فیلم ها</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="">صفحه اصلی</a></li>
                        <li>فیلم ها </li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
              <div class="row">
                    @foreach ($videos as $video )
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="event-box2">
                                <div class="event-thumb">
                                    <?php echo $video->iframe ?>
                                </div>
                                <div class="event-info">
                                    <p>نام ویدیو  : <strong> {{ $video->name }}</strong> </p>
                                    <div class="mt-3">
                                        <a href="{{ route('video.show', ['id' => $video->id]) }}" class="btn btn-info btn-sm" style="float: left;">صفحه ویدیو</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
              </div>
            </div>
        </div>
        <div class="pagination-wrap text-center">
            {{ $videos->links('pagination::bootstrap-4') }}
        </div><!-- Pagination Wrap -->
    </section>
</div>
