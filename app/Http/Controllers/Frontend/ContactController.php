<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|string|regex:/^[a-zA-Z\s\.]+$/|max:100',
            'email'            => 'required|email|max:100',
            'phone'            => 'required|regex:/^[0-9\+\-\s\(\)]+$/|max:20',
            'company'          => 'required|string|max:100',
            'product_interest' => 'nullable|string|max:200',
            'subject'          => 'nullable|string|max:200',
            'message'          => 'required|string|max:1000',
        ], [
            'name.regex' => 'The name must only contain letters and spaces.',
            'phone.regex' => 'The phone number must only contain digits, spaces, dashes, or a plus sign.',
        ]);

        Inquiry::create([
            'name'             => $request->name,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'company'          => $request->company,
            'product_interest' => $request->product_interest ?? $request->subject,
            'message'          => $request->message,
        ]);

        return back()->with('success', 'Thank you for your inquiry. Our team will contact you within 24 hours.');
    }
}
