@extends('layouts.default')

@section('content')
<div class="container my-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    <form class="mt-4 d-flex flex-column" method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required
                autofocus />
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input class="form-control" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="form-group">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="w-50 btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>

    </form>
</div>
@endsection