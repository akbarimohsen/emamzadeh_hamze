<div>
    <li>
        <h5>{{ $question_box->question }}</h5>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="1" disabled @if($question_box->real_answer == 1)  checked="checked" @endif>
                    <label>{{ $question_box->answer1 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="2" disabled @if($question_box->real_answer == 2)  checked="checked" @endif>
                    <label>{{ $question_box->answer2 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="3" disabled @if($question_box->real_answer == 3)  checked="checked" @endif>
                    <label>{{ $question_box->answer3 }} </label>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="radio" name="answer{{$question_box->id}}" value="4" disabled @if($question_box->real_answer == 4)  checked="checked" @endif>
                    <label>{{ $question_box->answer4 }} </label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="#" class="btn btn-danger" wire:click.prevent="delete" >حذف </a>
        </div>
    </li>
    <hr>
</div>
