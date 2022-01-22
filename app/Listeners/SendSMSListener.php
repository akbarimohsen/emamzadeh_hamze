<?php

namespace App\Listeners;

use App\Events\SendAuthSMS;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use SoapClient;

class SendSMSListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

    /**
     * Handle the event.
     *
     * @param  SendAuthSMS  $event
     * @return void
     */
    public function handle(SendAuthSMS $event)
    {
        //
        $phone = $event->phone;
        $code = $event->code;

        $this->sendCode($phone,$code);
    }
}
