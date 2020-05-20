@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.' . $type) }}</h1>
        <a class="btn btn-primary" href="{{ route('users.create', $type) }}">{{ __('users.create') }}</a>
        <div class="mt-3">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>{{ __('users.name') }}</th>
                    <th>{{ __('users.email') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->user->name }}</th>
                            <th>{{ $user->user->email }}</th>
                            <th>
                                <div class="d-flex justify-content-around">
                                    <a class="btn btn-info" href="{{ route('users.show', ['user' => $user->user->id, 'type' => $type]) }}">i</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
