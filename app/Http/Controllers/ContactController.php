<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|max:50',
            'message' => 'required|max:255',
        ]);

        Mail::raw($request->input('message'), function ($msg) use ($request) {
            $msg->to('mail@hollander-diele.de')->subject('Kontaktformular')->from($request->input('email'));
        });

        return response()->json([
            'message' => 'Email successfull send'
        ]);
    }
}
