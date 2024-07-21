<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->all();

        $name = $req["name"];
        $email = $req["email"];
        $mobile = $req["mobile"];
        $date = $req["date"];
        $address = $req["address"];
        $pass = $req["password"];
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "date" => "required|date",
            "password" => "required|same:confim_password",
            "confim_password" => "required|same:password"
        ]);
        $ch_user = DB::table("user")->select("*")->where("email", "=", $email)->get();
        if (count($ch_user->all()) == 0) {
            // $user = DB::table("user")->insert([
            //     "name" => $name,
            //     "email" => $email,
            //     "mobile" => $mobile,
            //     "dob" => $date,
            //     "address" => $address,
            //     "pass" => $pass,
            // ]);
            $user = User::create([
                "name" => $name,
                "email" => $email,
                "mobile" => $mobile,
                "dob" => $date,
                "address" => $address,
                "pass" => $pass,
            ]);
            if ($user) {
                return redirect(route("login"));
            } else {
                return redirect(route("user.create"));
            }
        } else {
            return redirect(route("user.create"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (session("client_login")) {
            return view("profile");
        } else {
            return redirect(route("home"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
