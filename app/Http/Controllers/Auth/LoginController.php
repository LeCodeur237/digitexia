<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'phone_local' => ['required', 'string', 'max:30'],
            'password' => ['required', 'string'],
        ]);

        $phoneDigits = preg_replace('/\D+/', '', $credentials['phone_local']);
        $phone = str_starts_with($phoneDigits, '237')
            ? '+' . $phoneDigits
            : '+237' . ltrim($phoneDigits, '0');

        if (! Auth::attempt([
            'phone' => $phone,
            'password' => $credentials['password'],
        ], $request->boolean('remember'))) {
            return back()
                ->withErrors([
                    'phone_local' => 'The provided credentials are incorrect.',
                ])
                ->onlyInput('phone_local');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('blog.admin.index'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
