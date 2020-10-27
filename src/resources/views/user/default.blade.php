@extends('layouts.default')

@section('content')
<div class="d-flex flex-column align-items-center">
    @if (session('status'))
    <div>{{ session('status') }}</div>
    @endif

    <div>You are logged in!</div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">
            {{ __('Logout') }}
        </button>
    </form>

    <hr>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
    @include('user.profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
    @include('user.profile.update-password-form')
    @endif

    {{-- @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
        @include('profile.two-factor-authentication-form')
    @endif --}}

    @can('upload publication')
    1
    @else
    2
    @endcan
</div>
@endsection