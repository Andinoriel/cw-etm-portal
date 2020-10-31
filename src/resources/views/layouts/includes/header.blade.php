@include('auth.login')
@include('auth.register')

@include('errors.show')

<div class="container-fluid top-header">
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
            <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center text-white">
                TMD of Pryazovskyi State Technical University
            </div>
            <div
                class="d-flex flex-column flex-sm-row justify-content-around align-items-center align-items-sm-center top-header-contacts">
                @guest
                @if (Route::has('login'))
                <button type="button" class="m-2 btn btn-light" data-toggle="modal" data-target="#loginModal">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </button>
                @endif
                @if (Route::has('register'))
                <button type="button" class="m-2 btn btn-light" data-toggle="modal" data-target="#registerModal">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </button>
                @endif
                @else {{-- !guest --}}
                <div class="link-default">
                    <a href="{{ route('profile') }}" class="btn">{{ Auth::user()->email }}</a>
                </div>
                @can('administrate')
                <div class="m-2">
                    <a href="{{ route('admin') }}" class="btn btn-light">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                        </svg>
                    </a>
                </div>
                @endcan
                <a class="btn btn-light m-2" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none" hidden>
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</div>
<div class="header">
    <nav class="header navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <div class="col-3 col-md-4">
                <a class="ml-2 navbar-brand" href="/">LOGO</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-12 col-md-8 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-md-flex flex-md-row justify-content-md-end">
                    <li class="nav-item mx-md-1">
                        <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">
                            Main Page
                        </a>
                    </li>
                    <li class="nav-item mx-md-1">
                        <a class="nav-link {{request()->is('books') ? 'active disabled' : ''}}" href="/books">
                            All Files
                        </a>
                    </li>
                    <li class="nav-item mx-md-1">
                        <a class="nav-link {{request()->is('faculties') ? 'active disabled' : ''}}" href="/faculties">
                            Faculties
                        </a>
                    </li>
                    <li class="nav-item dropdown mx-md-1">
                        <a class="nav-link dropdown-toggle" href="#" id="enrollee" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Element
                        </a>
                        <div class="dropdown-menu" aria-labelledby="enrollee">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Action 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- /.header -->