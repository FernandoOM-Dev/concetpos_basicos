<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        //correo al usuario
        Mail::send('emails.contact', $request->all(), function ($message) use ($request){
            $message->subject('Correo de contacto');
            $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
            $message->to($request->email, $request->name);
        });

        //Correo al administrador
        Mail::send('emails.admin', $request->all(), function ($message) {
            $message->subject('Mensaje de usuario');
            $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
            $message->to(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
        });

        return redirect(route('home'));
    }
}
