<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);


        Mail::to('oferia@example.com')
            ->send(new ContactMailable($request->all()));

        

        return redirect()
            ->route('contact.index')
            ->with('info', 'Mensaje enviado');
    }
        
}
