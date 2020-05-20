@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.requests') }}</h1>
        <div class="mt-3">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>{{ __('requests.name') }}</th>
                    <th>{{ __('requests.phone') }}</th>
                    <th>{{ __('requests.status') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $record)
                    <tr>
                        <th>{{ $record->name }}</th>
                        <th>{{ $record->phone }}</th>
                        <th>{{ $record->status ? __('requests.done') : __('requests.waiting') }}</th>
                        <th>
                            <div class="d-flex justify-content-around">
                                @if(!$record->status)
                                    <a class="btn btn-info" href="{{ route('requests.show', $record->id) }}">i</a>
                                @endif
                            </div>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
