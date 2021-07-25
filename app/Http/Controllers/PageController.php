<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ddd($validateData);;
    }
}
