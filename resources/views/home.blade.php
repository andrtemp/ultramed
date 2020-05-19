@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ __('home.header') }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 text-justify">
            <img class="w-100" src="{{ asset('img/main.jpg') }}" alt="Ultramed"/>
            <p>{{ __('home.main') }}</p>
            <img class="w-100" src="{{ asset('img/lobby.jpg') }}" alt="Ultramed"/>
           <p>{{ __('home.section') }}</p>
            <img class="w-100" src="{{ asset('img/section.jpg') }}" alt="Ultramed"/>
        </div>
    </div>
</div>
@endsection
