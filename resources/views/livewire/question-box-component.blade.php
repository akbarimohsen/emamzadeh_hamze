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
                            <input  type="radio"   value="1" @if($submited == 1) checked @endif wire:model.lazy="answer"  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer1}}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio"    value="2" @if($submited == 2) checked @endif wire:model.lazy="answer"  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer2}}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio"    value="3" @if($submited == 3) checked @endif wire:model.lazy="answer"  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{ $question->answer3 }}</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="radio"    value="4" @if($submited == 4) checked @endif wire:model.lazy="answer"  >
                        </td>
                        <td style="float: right;">
                            <p><b>{{$question->answer4}}</b></p>
                        </td>
                    </tr>
                </table>
                <br>
                @if($submited == 0)
                    <button type="submit" class="btn btn-danger" style="float: right;" disabled=true >هنوز پاسخی ثبت نشده است</button>
                @else
                    <button type="submit" class="btn btn-primary" style="float: right;" disabled=true > پاسخ انتخابی شما : {{ $submited }}</button>
                @endif
            </form>

    </div>
    <hr>
</div>
