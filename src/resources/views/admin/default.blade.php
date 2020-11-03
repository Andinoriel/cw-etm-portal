@extends('layouts.default')

@section('title') ETM - Admin Panel @endsection
@section('description') NULL @endsection

@section('modals')
@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
@include('user.profile.update-password-form')
@endif

@if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
@include('user.profile.update-profile-information-form')
@endif
@endsection

@section('content')
<div class="container">
    <div class="text-center mt-5 mb-0">
        <h1 class="title">
            Admin Panel
        </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container mt-0 mb-5">
    <div class="row justify-content-center align-items-center my-4">
        @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        <button type="button" class="w-25 m-2 btn btn-warning" data-toggle="modal" data-target="#updateEmailModal">
            <div class="d-inline d-md-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-text" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 2a.5.5 0 0 1 .5-.5c.862 0 1.573.287 2.06.566.174.099.321.198.44.286.119-.088.266-.187.44-.286A4.165 4.165 0 0 1 10.5 1.5a.5.5 0 0 1 0 1c-.638 0-1.177.213-1.564.434a3.49 3.49 0 0 0-.436.294V7.5H9a.5.5 0 0 1 0 1h-.5v4.272c.1.08.248.187.436.294.387.221.926.434 1.564.434a.5.5 0 0 1 0 1 4.165 4.165 0 0 1-2.06-.566A4.561 4.561 0 0 1 8 13.65a4.561 4.561 0 0 1-.44.285 4.165 4.165 0 0 1-2.06.566.5.5 0 0 1 0-1c.638 0 1.177-.213 1.564-.434.188-.107.335-.214.436-.294V8.5H7a.5.5 0 0 1 0-1h.5V3.228a3.49 3.49 0 0 0-.436-.294A3.166 3.166 0 0 0 5.5 2.5.5.5 0 0 1 5 2zm3.352 1.355zm-.704 9.29z" />
                </svg>
            </div>
            <div class="d-none d-md-inline">
                Change&nbsp;Email
            </div>
        </button>
        @endif
        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <button type="button" class="w-25 m-2 btn btn-warning" data-toggle="modal" data-target="#updatePasswordModal">
            <div class="d-inline d-md-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-asterisk" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                </svg>
            </div>
            <div class="d-none d-md-inline">
                Change&nbsp;Password
            </div>
        </button>
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-faculties') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-faculties.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Faculties</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-cathedras') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-cathedras.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Cathedras</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-teachers') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-teacher.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Teachers</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-subjects') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-subjects.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Subjects</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-students') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-students.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Students</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="content">
                <a href="{{ route('manage-users') }}">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="/static/placeholder_a-users.jpg">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Manage Users</span>
                    </div>
                </a>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z" />
                </svg>
            </div>
        </div>
    </div>
</div>
@endsection