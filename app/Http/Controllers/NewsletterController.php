<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionMail;
use App\Models\NewsletterSubscriber;
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

        $email = strtolower($data['newsletter_email']);

        NewsletterSubscriber::updateOrCreate(
            ['email' => $email],
            [
                'source' => 'footer',
                'ip_address' => $request->ip(),
                'user_agent' => substr((string) $request->userAgent(), 0, 1000),
                'subscribed_at' => now(),
            ]
        );

        Mail::to('contactdigitexia@gmail.com')->send(
            new NewsletterSubscriptionMail($email)
        );

        return back()->with('newsletter_success', __('You have been subscribed to the newsletter.'));
    }
}
