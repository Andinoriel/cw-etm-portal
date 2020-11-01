<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login-form">
                <form method="post" action={{ route('login') }}>
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
                            Submit
                        </button>
                    </div>

                    {{-- <div class="form-group text-center">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forget-password disabled">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>