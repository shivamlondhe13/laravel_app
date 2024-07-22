<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function index(Request $request)
    {
        Auth::logout();
        return redirect(route("home"));
    }
}
