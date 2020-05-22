@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.' . $type) }}</h1>
        <div class="row justify-content-center">
            <form class="w-50" action="{{ route('users.store', $type) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('users.name') }}</label>
                    <input name="name" type="text" class="form-control" id="name" required/>
                </div>
                <div class="form-group">
                    <label for="email">{{ __('users.email') }}</label>
                    <input name="email" type="email" class="form-control" id="email" required/>
                </div>
                <div class="form-group">
                    <label for="password">{{ __('users.password') }}</label>
                    <input name="password" type="text" class="form-control" id="password" required/>
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('users.phone') }}</label>
                    <input name="phone" type="text" class="form-control" id="phone" required/>
                </div>
                @if($type === 'doctor')
                    <div class="form-group">
                        <label for="specialization">{{ __('users.specialization') }}</label>
                        <input name="specialization" type="text" class="form-control" id="specialization" required/>
                    </div>
                    <div class="form-group">
                        <label for="position">{{ __('users.position') }}</label>
                        <input name="position" type="text" class="form-control" id="position" required/>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="photo">{{ __('users.photo') }}</label>--}}
                        {{--<input name="photo" type="file" class="form-control" id="photo"/>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label for="text">{{ __('users.text') }}</label>
                        <textarea name="text" class="form-control" id="text"></textarea>
                    </div>
                @endif
                @if($type === 'registrar')
                @endif
                @if($type === 'patient')
                    <div class="form-group">
                        <label for="birth_date">{{ __('users.birth_date') }}</label>
                        <input name="birth_date" type="text" class="form-control" id="birth_date" required/>
                    </div>
                    <div class="form-group">
                        <label for="card">{{ __('users.card') }}</label>
                        <textarea name="card" class="form-control" id="card" required></textarea>
                    </div>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('users.action') }}</button>
                    <button type="reset" class="btn btn-danger">{{ __('users.reset') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
