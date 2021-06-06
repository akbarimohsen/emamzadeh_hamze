<div>
    <div class="row alert alert-primary">
        <div class="col-md-12" style="text-align: right">
            <p style="font-size: 15pt;"><b>{{ $question->question }}</b></p>
        </div>
            <form wire:submit.prevent="submit" class="mt-4">
                @csrf
                <table>
                    <tr>
                        <td>
                            <input  type="radio" @if($submited==0) wire:model.lazy="answer" @else disabled=true @endif value="1" @if($submited == 1) checked @endif   >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer1}}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio" @if($submited==0) wire:model.lazy="answer" @else disabled=true @endif value="2" @if($submited == 2) checked @endif  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer2}}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio" @if($submited==0) wire:model.lazy="answer" @else disabled=true @endif value="3" @if($submited == 3) checked @endif  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer3}}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio" @if($submited==0) wire:model.lazy="answer" @else disabled=true @endif value="4" @if($submited == 4) checked @endif  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer4}}</b></p>
                        </td>
                    </tr>
                </table>
                <br>
                @if($submited == 0)
                    <button type="submit" class="btn btn-success" style="float: right;" @if($submited != 0) @endif>ثبت پاسخ</button>
                @else
                    <button type="submit" class="btn btn-primary" style="float: right;" @if($submited != 0) disabled=true @endif>پاسخ شما ثبت گردید.</button>
                @endif
            </form>

    </div>
    <hr>
</div>
