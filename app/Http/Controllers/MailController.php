<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    public function index(){
        $mailData=[
            'title'=>'Welcome to QKCreator',
            'body'=>'Your Account Has been Created on Our Website'
        ];
        Mail::to("yasirhusain250@gmail.com")->send(new DemoMail($mailData));

    }
}
