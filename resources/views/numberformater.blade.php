@extends('layouts.main')
@section('page_title', 'Home')
@section('main_content')
    <x-bread-crumb :crumb="$crumb = 'Number formater'" />
    <div class="container mt-4">
        <form action="{{ route('numberformated') }}" method="POST">
            @csrf
            <x-b_input id="number_id" name="number" label="Enter Number" value="" :required="$required = 'required'" type="number" />
            <button class="btn btn-sm btn-primary">Submit</button>
        </form>
        <div class="d-flex justify-content-center">
          <h4>
              {{ $num ?? '' }}
          </h4>
        </div>
    </div>
@endsection
