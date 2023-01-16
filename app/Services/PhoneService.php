<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PhoneService
{
    public static function clean(Request $request)
    {
        return preg_replace('/[^0-9]/', '', $request->phone);
    }
}
