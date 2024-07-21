@extends("layouts.main")
@section("page_title","Login")
@section("main_content")
<x-bread-crumb :crumb="$crumb='Login'" />
<div class="container">
  <form class="mt-4" method="post" action="{{route("login.check")}}">
    @csrf
    <div>
      <x-b_input name="name" type="text" label="Username/email" :required="$required='required'" id="user_name" value="" />
    </div>
    <div>
      <x-b_input name="pass" type="password" label="password" :required="$required='required'" id="passwrod" value="" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection