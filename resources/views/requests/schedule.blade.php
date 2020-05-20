@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.requests') }}</h1>
        <div class="mt-3">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>{{ __('requests.doctor') }}</th>
                    <th>{{ __('requests.patient') }}</th>
                    <th>{{ __('requests.date') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <th>{{ $record->doctor->user->name }}</th>
                        <th>{{ $record->patient->user->name }}</th>
                        <th>{{ $record->date }}</th>
                        <th>
                            <div class="d-flex justify-content-around">
                                {{--@if(!$record->status)--}}
                                    {{--<a class="btn btn-info" href="{{ route('requests.show', $record->id) }}">i</a>--}}
                                {{--@endif--}}
                            </div>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
