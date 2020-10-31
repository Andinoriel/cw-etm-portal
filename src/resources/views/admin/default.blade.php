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
                <a href="{{ route('manage-faculties') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Faculties</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('manage-cathedras') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Cathedra</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('manage-teachers') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Teachers</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('manage-subjects') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Subjects</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('manage-students') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Students</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="content">
                <a href="{{ route('manage-users') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Users</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
