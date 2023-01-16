<?php

namespace App\Traits;

use App\Notifications\SendVerifySMS;
use Illuminate\Validation\ValidationException;

trait MustVerifyPhone
{
    /**
     * Determine if the user has verified their phone number.
     *
     * @return bool
     */
    public function hasVerifiedPhone()
    {
        return ! is_null($this->phone_verified_at);
    }

    /**
     * Mark the given user's phone as verified.
     *
     * @return bool
     */
    public function markPhoneAsVerified()
    {
        return $this->forceFill([
            'phone_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Send the phone verification notification.
     *
     * @return void
     */
    public function sendPhoneVerificationNotification()
    {
        try {
            $this->forceFill([
                'phone_verify_code' => random_int(111111, 999999),
            ])->save();

            $this->notify(new SendVerifySMS);
        } catch (\Exception $e) {
            $this->delete();

            throw ValidationException::withMessages([
                'phone' => trans('auth.smsc'),
            ]);
        }
    }

    /**
     * Get the phone number that should be used for verification.
     *
     * @return string
     */
    public function getPhoneForVerification()
    {
        return $this->phone;
    }
}
