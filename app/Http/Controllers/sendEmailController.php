<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendReminder;

class sendEmailController extends Controller
{
    public function index()
    {
        $child_id = session('child_id');
        return view('emails.sendreminder')->with('child_id', $child_id);
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $data = array(
            'name' => $request->name,
            'date' => $request->date,
            'child_id' => $request->child_id
        );

        $email =$request->email;
        Mail::to($email)->send(new SendReminder($data));
        return back()->with('success', 'Email Sent');
    }
}
