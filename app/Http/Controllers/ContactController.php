<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiryMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:120'],
            'organization' => ['nullable', 'string', 'max:160'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:60'],
            'topic' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to('contactdigitexia@gmail.com')->send(new ContactInquiryMail($data));

        return back()->with('contact_success', __('Your message has been sent. We will get back to you shortly.'));
    }
}
