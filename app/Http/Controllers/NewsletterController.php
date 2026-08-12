<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $data = $request->validateWithBag('newsletter', [
            'newsletter_email' => ['required', 'email', 'max:160'],
        ]);

        Mail::to('contactdigitexia@gmail.com')->send(
            new NewsletterSubscriptionMail($data['newsletter_email'])
        );

        return back()->with('newsletter_success', __('You have been subscribed to the newsletter.'));
    }
}
