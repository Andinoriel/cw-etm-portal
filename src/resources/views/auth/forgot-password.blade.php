@extends('layouts.default')

@section('content')

<div class="container my-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">

    <div class="d-flex flex-row justify-content-between align-items-center">
        <div class="text-justify">
            <h4>
                Forgot your password? No problem. Just let us know your email address and we will email you a password
                reset
                link that will allow you to choose a new one.
            </h4>
        </div>
    </div>

    <form class="mt-4 d-flex flex-column" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus />
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="w-50 btn btn-primary">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection