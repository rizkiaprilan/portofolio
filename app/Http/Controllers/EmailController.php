<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->email;
        $data = array('name' => $request->name, 'email_body' => $request->message);
        if (!isset($_COOKIE['sent-email'])) {
            Mail::send('email_tamplate', $data, function ($mail) use ($email) {
                $mail->to('rizkiaprilan8@gmail.com', 'no-reply')->subject("Notifikasi dari website portofolio");
                $mail->from($email, $email);
            });
        } else {
            $cookie = json_decode( $_COOKIE[ "sent-email" ] );
            $date = date('d/m/Y H:i:s', $cookie->expiry);
            return 'Kamu Baru Saja Mengirim Email, Mohon Di Tunggu ' . $date . ' WIB';
        }
        if (Mail::failures()) {
            return 'Maaf Email anda gagal terkirim';
        }

        //COOKIE
        $expiry = time() + 300;//Hanya 5 Menit
        $data = (object) array("sent-email" => 1);
        $cookieData = (object) array("data" => $data, "expiry" => $expiry);
        setcookie('sent-email', json_encode($cookieData), $expiry);
        return 'Email telah terkirim';
    }
}
