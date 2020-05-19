@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ __('layout.staff') }}</h1>
    <div class="row justify-content-center">
        <div class="d-flex flex-wrap justify-content-around">
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/1.png') }}"/>
                </div>
                <div class="card-footer">
                    Анісімов Віктор Петрович
                </div>
            </div>
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/2.jpg') }}"/>
                </div>
                <div class="card-footer">
                    Бережна Олена Геннадіївна
                </div>
            </div>
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/3.jpg') }}"/>
                </div>
                <div class="card-footer">
                    Білорус Володимир Володимирович
                </div>
            </div>
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/4.jpg') }}"/>
                </div>
                <div class="card-footer">
                    Більга Світлана Степанівна
                </div>
            </div>
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/5.jpg') }}"/>
                </div>
                <div class="card-footer">
                    Бобков Андрій Сергійович
                </div>
            </div>
            <div class="card services__card">
                <div class="card-body">
                    <img class="w-100" alt="" src="{{ asset('img/staff/6.jpg') }}"/>
                </div>
                <div class="card-footer">
                    Бова Анастасія Вікторівна
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
