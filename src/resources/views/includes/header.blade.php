<header class="mb-auto">
    <div class="container-fluid top-header">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center text-white">
                    TMD of Pryazovskyi State Technical University
                </div>
                <div
                    class="d-flex flex-column flex-lg-row justify-content-around align-items-start align-items-lg-center top-header-contacts">
                    <div class="d-none d-lg-flex mt-md-0 ml-3">
                        <img src="{{ asset ('images/placeholder.svg') }}" heigth="20px" width="20px" alt="position">
                        <span class="pl-2"><a href="https://goo.gl/maps/pAsua69ryAs6pWeB7">Mariupol</a></span>
                    </div>
                    <div class="d-none d-lg-flex mt-2 mt-md-0 ml-3">
                        <img src="{{ asset('images/email.svg') }}" heigth="20px" width="20px" alt="mail">
                        <span class="pl-2"><a href="mailto:mail@gmail.com">mail@gmail.com</a></span>
                    </div>
                    <div class="d-flex ml-lg-3">
                        <img class="d-none d-sm-flex" src="{{ asset('images/login.svg') }}" height="20px" width="20px"
                            alt="registration">
                        <a class="btn-reg ml-2" href="#">Sign In / Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <nav class="header navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <div class="col-3 col-md-4">
                    <a class="ml-2 navbar-brand" href="#">LOGO</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-12 col-md-8 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 d-md-flex flex-md-row justify-content-md-end">
                        <li class="nav-item mr-md-3">
                            <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">
                                Main Page {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle" href="#" id="enrollee" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Element
                            </a>
                            <div class="dropdown-menu" aria-labelledby="enrollee">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Action 3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('faculties') ? 'active' : ''}}" href="/faculties">
                                Faculties
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- /.header -->
</header>