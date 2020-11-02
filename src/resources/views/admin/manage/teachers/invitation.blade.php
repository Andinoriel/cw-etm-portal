<div class="modal fade" id="invitationModal" tabindex="-1" role="dialog" aria-labelledby="invitation"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invitation">Invitations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login-form">
                <div>
                    <ul>
                        @foreach ($invitations as $invitation)
                        <li>{{ $invitation->invite_key }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>