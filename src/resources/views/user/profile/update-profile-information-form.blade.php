<form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label>{{ __('Email') }}</label>
        <input type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>

    <div>
        <button type="submit">
            {{ __('Update Email') }}
        </button>
    </div>
</form>

<hr>
