@extends('layouts.default')

@section('content')

<div class="container d-flex flex-column justify-content-center align-items-center">
    @if (session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif
    <div class="col-12 col-md-6 login-form">
        <h3>Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                    value="{{ old('email') }}" required autofocus />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}"
                    required autocomplete="current-password" />
            </div>

            <div class="form-group text-center">
                <button type="submit" class="submit" value="Login">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="form-group text-center">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forget-password">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="form-group">
                @if ($errors->any())
                <div>
                    <div>{{ __('Whoops! Something went wrong.') }}</div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection