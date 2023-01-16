<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\VerifyPhoneController;
use App\Http\Controllers\Auth\NewPasswordSmsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetSmsController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('check-phone', [AuthenticatedSessionController::class, 'checkPhone'])
                ->middleware('throttle:6,1')
                ->name('check-phone');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    //             ->name('password.request');

    // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    //             ->name('password.email');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //             ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //             ->name('password.update');

    Route::get('sms/forgot-password', [PasswordResetSmsController::class, 'phone'])
                ->name('password.sms.phone');

    Route::post('sms/forgot-password', [PasswordResetSmsController::class, 'storePhone'])
                ->name('password.sms.storephone');

    Route::post('sms/forgot-password/resend', [PasswordResetSmsController::class, 'resendCode'])
                ->middleware('throttle:6,1')
                ->name('password.sms.resend');

    Route::get('sms/forgot-password/code', [PasswordResetSmsController::class, 'code'])
                ->name('password.sms.code');

    Route::post('sms/forgot-password/code', [PasswordResetSmsController::class, 'storeCode'])
                ->middleware('throttle:6,1')
                ->name('password.sms.storecode');

    Route::get('sms/reset-password/{token}', [NewPasswordSmsController::class, 'create'])
                ->middleware('password.token')
                ->name('password.sms.reset');

    Route::post('sms/reset-password', [NewPasswordSmsController::class, 'store'])
                ->name('password.sms.update');
});

Route::middleware('auth')->group(function () {
    // Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    //             ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    Route::get('verify-phone', [VerifyPhoneController::class, '__invoke'])
                ->name('verification.phone');

    Route::post('verify-phone', [VerifyPhoneController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.phone.send');

    Route::post('verify-phone/resend', [VerifyPhoneController::class, 'resend'])
                ->middleware('throttle:6,1')
                ->name('verification.phone.resend');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
