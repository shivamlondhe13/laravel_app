<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function index()
  {
    return view("login");
  }
  public function check(Request $request)
  {
    $req = $request->all();
    $request->validate([
      "name" => "required|email",
      "pass" => "required"
    ]);
    $credential = [
      "email" => $req["name"],
      "password" => $req["pass"]
    ];
    $user_name = $req["name"];

    $user = DB::table("users")->whereAny(["mobile", "email", "username"], "=", $user_name, "or")->get();
    $user_row = $user->toArray();
    if (count($user_row) == 0) {
      return redirect(route("login"));
    } else {
      if (Auth::attempt($credential)) {
        return redirect(route("home"));
      }
    }
  }
}
