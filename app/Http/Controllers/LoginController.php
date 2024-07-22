<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
    $user_name = $req["name"];
    $user = DB::table("user")->whereAny(["mobile", "email", "username"], "=", $user_name, "or")->get();
    $user_row = $user->toArray();
    if (count($user_row) == 0) {
    } else {
      if ($req["pass"] == $user_row[0]->pass) {
        $request->session()->put(["client_login" => "true", "client_id" => base64_encode($user_row[0]->id)]);
        return redirect(route("home"));
      }
    }
  }
}
