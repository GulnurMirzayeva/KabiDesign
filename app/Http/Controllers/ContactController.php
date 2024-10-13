<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        Mail::html(
            '<h1>Contact Form Submission</h1>' .
            '<p><strong>Name:</strong> ' . htmlspecialchars($data['name']) . '</p>' .
            '<p><strong>Phone:</strong> ' . htmlspecialchars($data['phone']) . '</p>' .
            '<p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>' .
            '<p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($data['message'])) . '</p>',
            function ($message) {
                $message->to('shahverdiyevakabira9@gmail.com')
                    ->subject('Contact Form Submission');
            }
        );

        return back()->with('success', 'Message sent successfully!');
    }
}
