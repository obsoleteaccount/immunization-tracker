<?php

namespace App\Http\Controllers;


use AfricasTalking\SDK\AfricasTalking;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function index()
    {
        return view('sms.sendsms');
    }

    public function send(Request $request){
        $this->validate($request, [
            'phone' => 'required',
            'date' => 'required'
        ]);

        $username = 'sandbox';
        $apiKey   = 'bfdad6d3d1ead4ee9589c6f7726584e94dfd306ca6df32f45f10ad4f24426f94';
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $phone = $request->phone;
        $date = $request->date;
        $sms->send([
            'to'      => $phone ,
            'message' => 'This is a reminder to visit the hospital on: '.$date,
        ]);

        return back()->with('success', 'SMS Sent');
       
    }   
}
