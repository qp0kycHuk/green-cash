<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class VerifyPhoneController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->user()->hasVerifiedPhone()) {
            return redirect()->to(RouteServiceProvider::HOME)->with('message', 'phone-verified');
        }

        return view('auth.verify-phone');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => config('auth.code'),
        ]);

        if ($request->user()->phone_verify_code === (int) $request->code) {
            $request->user()->markPhoneAsVerified();
            return redirect()->to(RouteServiceProvider::HOME)->with('message', 'phone-verified');
        }

        return back()->with('status', 'verification-code-error');
    }

    public function resend(Request $request)
    {
        event(new Registered($request->user()));
        return back();
    }
}
