@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.' . $type) }}</h1>
        <h3>{{ __('users.name') . ': ' . $user->user->name }}</h3>
        <h5>{{ __('users.email') . ': ' . $user->user->email }}</h5>
        <div class="row">
            <form class="w-50" action="{{ route('users.update', ['type' => $type, 'user' => $user->user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if($type === 'doctor')
                @endif
                @if($type === 'registrar')
                @endif
                @if($type === 'patient')
                    <div class="form-group">
                        <label for="card">{{ __('users.card') }}</label>
                        <textarea name="card" class="form-control" id="card" required>{{ $user->card }}</textarea>
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
