@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.card') }}</h1>
        <div class="row justify-content-center">
            {{ $patient->card }}
        </div>
    </div>
@endsection
