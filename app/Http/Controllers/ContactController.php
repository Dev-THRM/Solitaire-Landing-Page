<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('help@solitaireconsultancyservices.com')
            ->send(new ContactFormMessage($validated));

        return back()->with('success', 'Thank you for getting in touch! We will get back to you shortly.');
    }
}
