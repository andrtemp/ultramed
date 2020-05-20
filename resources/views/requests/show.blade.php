@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('layout.requests') }}</h1>
        <span class="alert alert-info d-flex justify-content-around">
            <span>{{ $request->name }}</span>
            <span>{{ $request->phone }}</span>
        </span>
        <div class="row justify-content-center">
            <form action="{{ route('record.store', $request->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="doctor_id">{{ __('requests.doctor') }}</label>
                    <select name="doctor_id" type="text" class="form-control" id="doctor_id" required>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="patient_id">{{ __('requests.patient') }}</label>
                    <select name="patient_id" type="text" class="form-control" id="patient_id" required>
                        @foreach($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">{{ __('requests.date') }}</label>
                    <input name="date" type="text" class="form-control" id="date" required/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('requests.action') }}</button>
                    <button type="reset" class="btn btn-danger">{{ __('requests.reset') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
