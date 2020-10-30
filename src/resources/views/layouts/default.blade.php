<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon" />

    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    @yield('styles')
</head>

<body>
    <div class="wrapper-container d-flex flex-column min-vh-100">
        <header class="mb-2">
            @include('layouts.includes.header')
        </header>

        <main class="mt-1 mb-auto">
            @yield('content')
        </main>

        <footer class="mt-auto">
            @include('layouts.includes.footer')
        </footer>
    </div>
    <!-- /.wrapper-container -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    {{-- Login/Register redirect and erros show --}}
    @if ($authLoginModal ?? '' === 'authLoginModal')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#loginModal').modal('show')
            })
        </script>
    @endif
    @if ($authRegisterModal ?? '' === 'authRegisterModal')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#registerModal').modal('show')
            })
        </script>
    @endif
    @if ($errors->any())
        <script type="text/javascript">
            $(document).ready(function() {
                $('#errorsModal').modal('show')
            })
        </script>
    @endif
    {{--  --}}

    <script src={{ asset('js/app.js') }}></script>
    @yield('scripts')
</body>

</html>