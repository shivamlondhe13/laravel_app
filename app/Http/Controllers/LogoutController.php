<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function index(Request $request)
    {
        $request->session()->forget(["client_id", "client_login"]);
        return redirect(route("home"));
    }
}
