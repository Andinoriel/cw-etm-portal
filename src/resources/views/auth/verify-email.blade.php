@extends('layouts.default')

@section('content')
<div class="container my-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">

    <div class="d-flex flex-row justify-content-between align-items-center">
        <div class="text-justify">
            <h4>
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                link we
                just emailed to you? If you didn't receive the email, we will gladly send you another.
            </h4>
        </div>
    </div>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <div class="d-flex justify-content-center">
            <button type="submit" class="w-50 btn btn-primary">
                {{ __('Resend Verification Email') }}
            </button>
        </div>
    </form>
</div>
@endsection