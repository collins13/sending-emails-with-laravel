<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Reminder;
class UserController extends Controller
{
    //

    public function sendMail()
    {
        $to_email = 'rashidcollins17@gmail.com';

        Mail::to($to_email)->send(new Reminder);
        return "E-mail has been sent Successfully";
    }
}
