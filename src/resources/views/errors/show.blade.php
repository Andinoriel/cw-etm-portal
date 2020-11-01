<div class="modal fade" id="errorsModal" tabindex="-1" role="dialog" aria-labelledby="errors" aria-hidden="true">
    <div class="modal-dialog" role="errors">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errors">Whoops! Something went wrong.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    {{-- @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif --}}
                    @if (count($errors->getBags()))
                    <div>
                        <ul>
                            @foreach ($errors->getBags() as $bag)
                                @foreach ($bag->getMessages() as $messages)
                                    @foreach ($messages as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </ul>
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