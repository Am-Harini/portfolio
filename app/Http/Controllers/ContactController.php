<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
            function ($mail) use ($data) {
                $mail->to(env('PORTFOLIO_EMAIL', 'harinibalamurugan110904@gmail.com'))
                     ->replyTo($data['email'], $data['name'])
                     ->subject('Portfolio Contact: ' . $data['subject']);
            }
        );

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}