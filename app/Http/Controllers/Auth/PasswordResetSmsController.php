<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\PhoneService;
use App\Http\Controllers\Controller;

class PasswordResetSmsController extends Controller
{
    /**
     * Display the main view of sms reset by phone.
     *
     * @return \Illuminate\View\View
     */
    public function phone()
    {
        return view('auth.sms-forgot-password');
    }

    /**
     * Handle an incoming phone request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storePhone(Request $request)
    {
        $request->merge(['phone' => PhoneService::clean($request)]);

        $request->validate([
            'phone' => config('auth.phone'),
        ]);

        if ($user = User::byPhone($request->phone)) {
            $user->sendPhoneVerificationNotification();
            session(['_phone' => $request->phone]);
            return redirect()->route('password.sms.code');
        }

        return back()->withInput()->with(['status' => 'phone-not-found']);
    }

    /**
     * Resend phone code
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resendCode()
    {
        if (!session('_phone')) {
            return back()->with('status', 'phone-session-error');
        }

        User::byPhone(session('_phone'))->sendPhoneVerificationNotification();
        return back();
    }

    /**
     * Generate user token via phone number,
     * phone verification code and temporary csrf token
     *
     * @return string
     */
    public function token($code)
    {
        return hash('sha256', session('_phone') . $code . csrf_token());
    }

    /**
     * Display the code confirmation view.
     *
     * @return \Illuminate\View\View
     */
    public function code()
    {
        return view('auth.sms-forgot-password-code');
    }

    /**
     * Handle an incoming phone request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeCode(Request $request)
    {
        $request->validate([
            'code' => config('auth.code'),
        ]);

        $user = User::byPhone(session('_phone'));

        if (!$user) {
            return back()->with('status', 'verification-code-error');
        }

        if ($user->phone_verify_code === (int) $request->code) {
            $token = $this->token($request->code);

            $user->forceFill([
                'remember_token' => $token,
            ])->save();

            // Forget session with the phone and etc.
            session()->flush();

            return redirect()->action([NewPasswordSmsController::class, 'create'], ['token' => $token]);
        }

        return back()->with('status', 'verification-code-error');
    }
}
