<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->email;
        $data = array('name' => $request->name, 'email_body' => $request->message);
        // dd('masuk');
        Mail::send('email_tamplate', $data, function ($mail) use ($email) {
            $mail->to('rizkiaprilan8@gmail.com', 'no-reply')->subject("Notifikasi dari website portofolio");
            $mail->from($email,$email);
        });
        if (Mail::failures()) {
            return 'Maaf Email anda gagal terkirim';
        }
        return 'Email telah terkirim';
    }
}
