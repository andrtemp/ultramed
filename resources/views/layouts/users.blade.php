@switch(user_role())
    @case('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index', 'registrar') }}">{{ __('layout.registrar') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index', 'doctor') }}">{{ __('layout.doctor') }}</a>
    </li>
    @break
    @case('registrar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('requests.index') }}">{{ __('layout.requests') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index', 'doctor') }}">{{ __('layout.doctor') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index', 'patient') }}">{{ __('layout.patient') }}</a>
    </li>
    @break
    @case('doctor')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('requests.schedule') }}">{{ __('layout.schedule') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index', 'patient') }}">{{ __('layout.patient') }}</a>
    </li>
    @break
    @case('patient')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('requests.schedule') }}">{{ __('layout.schedule') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('patient.card') }}">{{ __('layout.card') }}</a>
    </li>
    @break
@endswitch