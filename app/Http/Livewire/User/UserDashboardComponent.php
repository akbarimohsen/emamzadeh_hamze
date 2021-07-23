<?php

namespace App\Http\Livewire\User;

use App\Models\TwofactorCode;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use SoapClient;

class UserDashboardComponent extends Component
{

    public $user_code;

    public $first_name;
    public $last_name;

    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
    }
    public function sendCode($phone, $code)
    {
        ini_set("soap.wsdl_cache_enabled", "0");
        $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));


        $text = "کد فعالسازی شما $code می باشد. آستان مقدس امامزاده حمزه (ع)";
        $parameters['username'] = "emamzade";
        $parameters['password'] = "95mhg2";
        $parameters['to'] = $phone;
        $parameters['from'] = "50001000779875";
        $parameters['text'] =$text;
        $parameters['isflash'] =false;

        $result = $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
        $error_responses = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
        if(in_array($result, $error_responses))
        {
            return 0;
        }else{
            return 1;
        }
    }

    public function sendSMS()
    {
        $phone = Auth::user()->phone;
        $code = rand(10000, 99999);
        $code = "$code";

        $dt = Carbon::now();
        $dt->addMinutes(5);
        $dtStr = $dt->toDateTimeString();

        //check
        $tfc = TwofactorCode::where('user_id', '=', Auth::user()->id)->first();
        if($tfc)
        {
            $tfc->code = $code;
            $tfc->expired = $dtStr;
            $tfc->save();
        }else{
            TwofactorCode::create([
                'code' => $code,
                'expired' => $dtStr,
                'user_id' => Auth::user()->id
            ]);
        }
        $result = $this->sendCode($phone,$code);
        session()->flash('smsMessage',$result);
        return redirect()->route('user.dashboard');
    }

    public function deleteCode()
    {
        $tfc = Auth::user()->twoFactorCode;

        $tfc->delete();
    }

    public function submitCode()
    {
        $data = $this->validate([
            'user_code' => 'required'
        ]);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user_code = $data['user_code'];
        $tfc_code = $user->twoFactorCode->code;
        if($user_code === $tfc_code)
        {
            $user->is_confirm = 1;
            $user->save();
        }else{
            session()->flash('message', 'کد وارد شده نادرست می باشد.');
        }
        return redirect()->route('user.dashboard');
    }

    public function updateUser()
    {
        $data = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string'
        ]);

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];

        $user->save();

        session()->flash('updateMessage', 'اطلاعات شما با موفقیت بروزرسانی شد.');
    }

    public function render()
    {
        $now = Carbon::now();
        $user = Auth::user();
        $expired = 0;
        $tfc = $user->twoFactorCode;
        if($tfc != null)
        {
            $expired = Carbon::createFromFormat("Y-m-d H:i:s",$tfc->expired);
            if($now->greaterThan($expired))
            {
                $this->deleteCode();
                $expired = 0;
            }else{
                $expired = 1;
            }
        }
        return view('livewire.user.user-dashboard-component',[
            'user' => $user,
            'expired' => $expired
        ])->layout('layouts.base');
    }
}
