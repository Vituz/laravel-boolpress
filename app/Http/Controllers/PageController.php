<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function index()
    {
        return view('guest.welcome');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contacts()
    {
        return view('guest.contacts');
    }

    public function sendContactForm(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'body' => 'required',
        ]);

        // ddd($validateData);

        /* Visualizza senza inviare la mail */
        // return (new ContactFormMail($validateData))->render();

        Mail::to('admin@test.com')->send(new ContactFormMail($validateData));
        $contact = Contact::create($validateData);

        return redirect()
            ->back()
            ->with('message', 'Mail inviata con successo, riceverai una risposta entro 48h');
    }
}
