@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.contacts') }}</h1>
        <div class="d-flex justify-content-around mt-5">
            <span class="d-block">+380999999900</span>
            <span class="d-block">ultramed@gmail.com</span>
        </div>
        <div class="mt-5 w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115950.35306426056!2d30.307623515050043!3d50.4585798908801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x338710b1989e94a3!2z0JzQtdC00KHQuNGC0Lg6INGH0LDRgdGC0L3QsNGPINC60LvQuNC90LjQutCwINC70LDQt9C10YDQvdC-0Lkg0LzQtdC00LjRhtC40L3RiyDQuCDRhdC40YDRg9GA0LPQuNC4!5e0!3m2!1sru!2sua!4v1589842413943!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection
