<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Temporary Profile Index
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Temporary Profile Order List
     *
     * @return \Illuminate\View\View
     */
    public function orders()
    {
        return view('profile.orders');
    }

    /**
     * Temporary Profile Settigns
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        return view('profile.settings');
    }

    /**
     * Temporary Profile Password
     *
     * @return \Illuminate\View\View
     */
    public function password()
    {
        return view('profile.password');
    }
}
