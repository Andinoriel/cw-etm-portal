<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="register">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body register-form">
                @if (session('status'))
                <div>
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                            value="{{ old('email') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}"
                            required autocomplete="new-password" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="invite-key" placeholder="{{ __('Invite Key') }}"
                            required autocomplete />
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>