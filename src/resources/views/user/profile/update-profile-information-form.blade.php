<div class="modal fade" id="updateEmailModal" tabindex="-1" role="dialog" aria-labelledby="updateEmail"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateEmail">Update Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="email_1">{{ __('Email') }}</label>
                        <input class="form-control" id="email_1" type="email" name="email"
                            value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Sumbit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>