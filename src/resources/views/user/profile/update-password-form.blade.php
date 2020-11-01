<div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="updatePassword"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePassword">Update Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="password_1">{{ __('Current Password') }}</label>
                        <input class="form-control" id="password_1" type="password" name="current_password" required
                            autocomplete="current-password" />
                    </div class="form-group">

                    <div class="form-group">
                        <label for="password_2">{{ __('Password') }}</label>
                        <input class="form-control" id="password_2" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="form-group">
                        <label for="password_3">{{ __('Confirm Password') }}</label>
                        <input class="form-control" id="password_3" type="password" name="password_confirmation" required
                            autocomplete="new-password" />
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>