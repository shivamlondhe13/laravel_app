<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumFormatController extends Controller
{
  function index()
  {
    return view("numberformater");
  }
  function result(Request $request)
  {
    $req = $request->toArray();
    $old_num = $req["number"];
    $num =  Numberformat($old_num);
    $result = compact('num');
    return view("numberformater")->with($result);
  }
}
