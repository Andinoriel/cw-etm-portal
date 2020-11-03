@extends('layouts.default')

@section('title') ETM - Main Page @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">Portal of Educational and Teaching Materials of PSTU</h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container mt-0 mb-5">
    <div class="row d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center">
        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
            <div class="text-justify roboto18">
                This site contains full texts of educational and methodological developments of scientific and
                pedagogical
                workers of the Priazovsky State Technical University.
            </div>
            <div class="text-justify roboto18 mt-4">
                Access to the full texts is possible only for users of the PSTU scientific and technical library after
                registration on this site.
            </div>
            <div class="faculty-block mt-4">
                <div class="content">
                    <a href="/faculties">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="/static/placeholder_a-faculties.jpg">
                        <div class="content-details move-bottom">
                            <span class="roboto18 content-title">Go to Faculties</span>
                        </div>
                    </a>
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <img class="main-image" src="/static/pstu.jpg" alt="">
        </div>
    </div>
</div>
@endsection