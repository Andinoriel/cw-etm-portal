<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="nav nav-tabs" role="tablist">
                <a class="nav-item w-50 p-3 text-center active" data-toggle="tab" href="#tab1" role="tab">
                    For <b>Teachers</b>
                </a>
                <a class="nav-item w-50 p-3 text-center" data-toggle="tab" href="#tab2" role="tab">
                    For <b>Students</b>
                </a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in show active" id="tab1" role="tabpanel">

                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title roboto24" id="register">Register</h5>
                    </div>
                    <div class="modal-body register-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <input type="hidden" name="registerType" value="registerTeacher">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"
                                    placeholder="{{ __('Password') }}" required autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="invite_key"
                                    placeholder="{{ __('Invite Key') }}" required autocomplete />
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel">

                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title roboto24" id="register">Welcome</h5>
                    </div>
                    <div class="modal-body register-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" name="registerType" value="registerStudent">

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"
                                    placeholder="{{ __('Password') }}" required autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="card_code"
                                    placeholder="{{ __('Library Card Code') }}" required autocomplete />
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
    </div>
</div>