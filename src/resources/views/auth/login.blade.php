@if (session('status'))
<div>
    {{ session('status') }}
</div>
@endif

@if(Request::is('login'))
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href={{ asset('css/app.css') }}>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#loginModal').modal('show');
    });
</script>
@endif


<div class="modal fade login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h3>Login</h3>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
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
                            {{ __('Login') }}
                        </button>
                    </div>

                    <div class="form-group text-center">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forget-password">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                    {{-- <div class="form-group">
                        @if ($errors->any())
                        <div>
                            <div>{{ __('Whoops! Something went wrong.') }}</div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>

