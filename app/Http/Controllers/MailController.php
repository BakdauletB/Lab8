<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send(){
        $obj = new \stdClass();
        Mail::to("180103038@stu.sdu.edu.kz")->send(new DemoEmail($obj));
        //abylay.omar@sdu.edu.kz
        return "Hello! I have sent you great information !!!";
    }
}