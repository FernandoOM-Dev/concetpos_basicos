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
            $message->from('shoesshoptest4@gmail.com', 'SHOES SHOP');
            $message->to($request->email, $request->name);
        });

        //Correo al administrador
        Mail::send('emails.admin', $request->all(), function ($message) {
            $message->subject('Mensaje de usuario');
            $message->from('shoesshoptest4@gmail.com', 'SHOES SHOP');
            $message->to('shoesshoptest4@gmail.com', 'SHOES SHOP');
        });

        return redirect(route('home'));
    }
}
