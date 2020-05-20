@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('book.header') }}</h1>
        <div class="row justify-content-center">
            <form action="{{ route('book.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('book.name') }}</label>
                    <input name="name" type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('book.phone') }}</label>
                    <input name="phone" type="text" class="form-control" id="phone"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('book.action') }}</button>
                    <button type="reset" class="btn btn-danger">{{ __('book.reset') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
