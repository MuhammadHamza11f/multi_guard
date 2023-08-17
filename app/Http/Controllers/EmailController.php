<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{

    public function index()
    {
        $reciverMail = "hjutt628@gmail.com";

        $testMailData = [
            'title' => 'Test Email From muhammad.hamza@ikonicsolution.com',
            'body' => 'This is the body of test email.'
        ];

        Mail::to($reciverMail)->send(new SendMail($testMailData));

        dd('Success! Email has been sent successfully.');
    }
}
