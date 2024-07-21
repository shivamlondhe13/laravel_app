@extends("layouts.main")
@section("page_title","Register")
@section("main_content")


<x-bread-crumb :crumb="$crumb='Register'" />
<div class="container mt-3">
  <form action="{{route("user.store")}}" method="POST">
    @csrf
    <style>
      .required {
        position: relative;
      }

      .required::after {
        content: "*";
        color: red;
        right: -10px;
        top: 0;
        position: absolute;
      }
    </style>
    <div class="row m-0">
      <div class="col-md-6 col-12">
        <x-b_input name="name" value="" label="Enter name" type="text" id="name_id" :required="$required='required'" />
      </div>

      <div class="col-md-6 col-12">
        <x-b_input name="email" value="" label="Enter Email" type="email" id="email_id" :required="$required='required'" />
      </div>

      <div class="col-md-6 col-12">
        <x-b_input name="mobile" value="" label="Enter Mobile No." type="text" id="mobile_id" :required="$required=''" />
      </div>

      <div class="col-md-6 col-12">
        <x-b_input name="date" value="" label="Enter DOB" type="date" id="dob_id" :required="$required='required'" />
      </div>

      <div class="col-md-6 col-12">
        <x-b_input name="password" value="" label="Enter Password" type="password" id="pass_id" :required="$required='required'" />
      </div>

      <div class="col-md-6 col-12">
        <x-b_input name="confim_password" value="" label="Enter Confirm Password" type="password" id="c_pass_id" :required="$required='required'" />
      </div>

      <div class="col-12">
        <x-b_textarea name="address" value="" label="Enter Address" id="address_id" :required="$required=''" />
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection