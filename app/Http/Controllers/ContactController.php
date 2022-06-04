<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(){
        Mail::send([], [], function ($message) {
            $message->to('test@jmartz.de')
              ->subject('Kontaktformular')
              ->setBody('Hi, welcome user!');
          });
          
    }
}
