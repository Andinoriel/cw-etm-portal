{{-- @extends('layouts.default')

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div>
            <button type="submit">
                {{ __('Confirm Password') }}
            </button>
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection --}}
