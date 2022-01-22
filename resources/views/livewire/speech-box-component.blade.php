<div>
    @if(count($contents) || count($videos))
        <div class="row">
            @if($contents)
                @foreach ($contents as $content)
                    <div class="col-md-6 col-sm-6 col-lg-4 m-1" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-box">
                            <div class="blog-thmb">
                                <a href="{{ route('ofogh.content' , ['id' => $content->id]) }}" title=""><img src={{ asset("assets/images/speeches/$content->image") }} alt="post-img1.jpg"></a>
                            </div>
                            <div class="blog-info">
                                <h5> {{ $content->title }} </h5>
                                <p><a href="#" title="">{{ $content->short_description }}</a></p>

                                <a href="{{ route('ofogh.content',['id' => $content->id]) }}" class="mt-2" title="">بیشتر بخوانید</a>
                                @auth
                                    @if(Auth::user()->utype == "ADM")
                                        <a href="#" class="btn btn-danger btn-sm" wire:click="delete({{$content->id}},'content')" style="float: left;" >حذف</a>
                                        <a href="{{ route('admin.editContent',['id' => $content->id]) }}" class="btn btn-primary btn-sm mx-1" style="float: left;" >تغییر</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            @if($videos)
                @foreach ($videos as $video)
                    <div class="col-md-6 col-sm-6 col-lg-4 m-1">
                        <div class="event-box2">
                            <div class="event-thumb">
                                <?php echo $video->iframe ?>
                            </div>
                            <div class="event-info">
                                <p>نام ویدیو  : <strong> {{ $video->name }}</strong> </p>
                                <div class="mt-3">
                                    <a href="{{ route('video.show', ['id' => $video->id]) }}" class="btn btn-info btn-sm" style="float: left;">صفحه ویدیو</a>
                                    @if(Auth::user()->utype == "ADM")
                                        <a href="#" class="btn btn-danger btn-sm" wire:click="delete({{$video->id}}, 'video')" style="float: right;" >حذف</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row mt-4">
            <a class="btn btn-success btn btn-block" href="{{ route('speeches.show', ['day' => $day]) }}">تمام سخنرانی ها</a>
        </div>
    @endif
    @if(Session::has('message'))
    <script>
        Swal.fire({
        icon: 'success',
        title: 'حذف مطلب',
        text: '{{ Session::get("message") }}'
                })
    </script>
    @endif
</div>
