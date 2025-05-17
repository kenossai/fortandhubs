<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
            'email' => $validated['email'],
            'unsubscribe_token' => Str::uuid(),
        ]);

        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

        return redirect()->back()->with('success', 'Subscribed successfully! Please check your email.');
    }

    public function unsubscribe($token)
    {
        $subscriber = Subscriber::where('unsubscribe_token', $token)->firstOrFail();
        $subscriber->delete();

        return redirect('/')->with('success', 'You have been unsubscribed.');
    }

}
