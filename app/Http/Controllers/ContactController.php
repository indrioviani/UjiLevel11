<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('footer');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // Menggunakan Mail::send() untuk mengirim email dengan menggunakan class ContactMail
        Mail::to('vianinursari@gmail.com')->send(new ContactMail($details));

        // Menggunakan method with() untuk memberikan pesan sukses ketika email berhasil terkirim
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
