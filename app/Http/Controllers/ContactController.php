<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:30'],
            'email'   => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // TODO: send this via Mail, or save to a `contact_messages` table.
        // Mail::to('info@stormvestsolar.com')->send(new ContactMail($validated));

        return back()->with('success', 'Thanks! We\'ll get back to you shortly.');
    }
}