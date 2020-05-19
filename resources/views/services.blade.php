@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.services') }}</h1>
        <div class="d-flex flex-wrap justify-content-around">
            <div class="card services__card">
                <div class="card-header">{{ __('services.alergo') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.alergo') }}" src="{{ asset('img/services/1.jpg') }}"/>
                </div>
                <div class="card-footer">
                    200 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.therapy') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.therapy') }}" src="{{ asset('img/services/2.jpg') }}"/>
                </div>
                <div class="card-footer">
                    250 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.dentist') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.dentist') }}" src="{{ asset('img/services/3.webp') }}"/>
                </div>
                <div class="card-footer">
                    400 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.analyses') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.analyses') }}" src="{{ asset('img/services/4.jpg') }}"/>
                </div>
                <div class="card-footer">
                    200 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.cardio') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.cardio') }}" src="{{ asset('img/services/5.jpg') }}"/>
                </div>
                <div class="card-footer">
                    150 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.infection') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.infection') }}" src="{{ asset('img/services/6.jpg') }}"/>
                </div>
                <div class="card-footer">
                    50 грн
                </div>
            </div>

            <div class="card services__card">
                <div class="card-header">{{ __('services.cosmetics') }}</div>
                <div class="card-body">
                    <img class="w-100" alt="{{ __('services.cosmetics') }}" src="{{ asset('img/services/7.webp') }}"/>
                </div>
                <div class="card-footer">
                    170 грн
                </div>
            </div>
        </div>
    </div>
@endsection
