<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="status" aria-hidden="true">
    <div class="modal-dialog" role="errors">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status">Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    @if (session('status'))
                    <div>
                        @switch(session('status'))
                        @case('profile-information-updated')
                            <span>Profile updated successfully!</span>
                        @break

                        @case('password-updated')
                            <span>Password updated successfully!</span>
                        @break

                        @default
                        <span>{{ session('status') }}</span>
                        @endswitch
                    </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>