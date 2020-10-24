<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 - Page Not Found</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="wrapper-container d-flex flex-column min-vh-100 p404 modal">
        <div class="my-auto">
            <div class="text">
                <p>404</p>
            </div>
            <div class="container container404">
                <!-- left -->
                <div class="caveman">
                    <div class="leg">
                        <div class="foot">
                            <div class="fingers"></div>
                        </div>
                    </div>
                    <div class="leg">
                        <div class="foot">
                            <div class="fingers"></div>
                        </div>
                    </div>
                    <div class="shape">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="head">
                        <div class="eye">
                            <div class="nose"></div>
                        </div>
                        <div class="mouth"></div>
                    </div>
                    <div class="arm-right">
                        <div class="club"></div>
                    </div>
                </div>
                <!-- right -->
                <div class="caveman">
                    <div class="leg">
                        <div class="foot">
                            <div class="fingers"></div>
                        </div>
                    </div>
                    <div class="leg">
                        <div class="foot">
                            <div class="fingers"></div>
                        </div>
                    </div>
                    <div class="shape">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="head">
                        <div class="eye">
                            <div class="nose"></div>
                        </div>
                        <div class="mouth"></div>
                    </div>
                    <div class="arm-right">
                        <div class="club"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src={{ asset('js/app.js') }}></script>
</body>

</html>