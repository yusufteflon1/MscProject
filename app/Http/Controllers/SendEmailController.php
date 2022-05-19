<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\NotifyMail;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;


class SendEmailController extends Controller
{

    public function index()
    {


        Mail::to('yusuf93@live.com')->send(new NotifyMail());

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return response()->success('Great! Successfully send in your mail');
        };
    }
}
