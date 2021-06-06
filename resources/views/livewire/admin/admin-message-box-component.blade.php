<div>
      <span>{{$duration}} ساعت قبل</span>
        <figure></figure>
        <h4>{{ $message_box->user_name }}</h4>
        <p>{{ $message_box->description }}</p>
        <p class="inline-popups">
            @if($message_box->read == 0)
            <a href="#" class="btn_1" style="background: #38ab1e;" wire:click="read" >خواندم</a>
            @else
            <a href="#" class="btn_1" style="background: #00BCEF; pointer-events:none ">خوانده شد</a>
            @endif
        </p>
</div>
