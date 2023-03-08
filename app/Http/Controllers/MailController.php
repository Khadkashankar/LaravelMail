<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //
    public function index()
    {
        $mailData=[
            'title'=>'mail from shankar khadka',
            'body'=>'hi from shankar khadka'
        ];
        Mail::to('syamd5421@gmail.com')->send(new DemoMail($mailData));
        dd('Email send successfully');
    }
}