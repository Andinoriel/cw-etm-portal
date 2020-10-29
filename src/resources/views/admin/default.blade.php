@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            Admin Panel
        </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('control-faculties') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Faculty</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('control-cathedras') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Cathedra</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('control-teachers') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Teacher</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('control-subjects') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Subject</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center double-color-line my-4">
        <div></div>
        <div></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center">
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="#">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Generate Invitation</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
