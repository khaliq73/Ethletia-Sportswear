<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'country' => 'required|string|max:255',
        'contact_number' => 'required|string|max:15',
        'message' => 'required|string|max:1000',
    ]);

    \App\Models\Contact::create($request->all());

    return back()->with('success', 'Your message has been submitted successfully!');
}

}
