@extends("layouts.main")
@section("page_title","Home")
@section("main_content")
<x-bread-crumb :crumb="$crumb='Home'" />
@endsection