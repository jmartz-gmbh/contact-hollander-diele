<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(){
        Mail::send([], [], function ($message) {
            $message->to('test@jmartz.de')
              ->subject('Kontaktformular')
              ->setBody('Hi, welcome user!');
          });
          
          return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
}
