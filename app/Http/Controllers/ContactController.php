<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {
        $arrayEmails = ['test@jmartz.de'];
        $emailSubject = 'My Subject';
        $emailBody = 'Hello, this is my message content.';

        Mail::send(
            'emails.normal',
            ['msg' => $emailBody],
            function ($message) use ($arrayEmails, $emailSubject) {
                $message->to($arrayEmails)
                    ->subject($emailSubject);
            }
        );

        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
}
