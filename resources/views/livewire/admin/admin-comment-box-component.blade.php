<div>
    <li>
        <span>{{ $comment_box->created_at->format('m/d/Y') }}</span>
        <figure><img src={{ asset("assets/images/resources/cmt-img.png") }} alt=""></figure>
        <h3>{{ $comment_box->user_name }}</h3>
        <h4>{{ $comment_box->title }}</h4>
        <p>{{ $comment_box->description }}</p>
        <p class="inline-popups">
            <a href="#modal-reply" data-effect="mfp-zoom-in" class="btn_1 gray"><i class="fa fa-fw fa-reply"></i> پاسخ</a>
            @if ($comment_box->confirm == 0)
                <a href="#" class="btn_1" style="background: #38ab1e;" wire:click="confirm('accept')" >قبول</a>
                <a href="#" class="btn_1" style="background: tomato;" wire:click="confirm('reject')" >رد</a>
            @elseif ($comment_box->confirm == 1)
                <a href="#" class="btn_1" style="background: #38ab1e; pointer-events: none;" > قبول شده</a>
            @elseif ($comment_box->confirm == -1)
                <a href="#" class="btn_1" style="background: tomato; pointer-events: none;" >رد شده</a>
            @endif
        </p>
    </li>
</div>
