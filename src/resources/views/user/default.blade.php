@extends('layouts.default')

@section('title') TMD - Personal @endsection
@section('description') NULL @endsection

@section('modals')
@role('user-teacher')
@include('user.profile.update')
@endrole
@endsection

@section('content')
<div class="d-flex flex-column align-items-center">
    @if (session('status'))
    <div>{{ session('status') }}</div>
    @endif

    <div class="container">
        <div class="text-center my-5">
            <h1 class="title">
                @role('user-teacher')
                {{ $teacher->last_name ?? '' }}
                {{ $teacher->first_name ?? 'Unknown' }}
                {{ $teacher->mid_name ?? '' }}
                @endrole
                @role('user-default')
                {{ $student->last_name }}
                {{ $student->first_name }}
                {{ $student->mid_name }}
                @endrole
            </h1>
            <div class="d-flex flex-row justify-content-center double-color-line">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        @role('user-teacher')
        <div class="d-flex flex-column flex-lg-row">
            <div class="col-12 col-lg-4">
                <img class="stuff-image" src={{ Storage::url($teacher->image) }} alt="person">
            </div>
            <div class="col-12 col-lg-8 mt-5 mt-lg-0">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Degree</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $teacher->degree ?? '' }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Faculty</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $teacher->Cathedra->Faculty->name ?? '' }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Cathedra</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $teacher->Cathedra->name ?? '' }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">About</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $teacher->about ?? '' }}
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-3">
                                <h6 class="mb-0">My Files</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <a class="btn btn-danger" href="{{ route('manage-files') }}">
                                    Show
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                            <form class="upload-photo" action="{{ route('upload-photo') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <label class="btn btn-secondary" for="upload-photo">Browse...</label>
                                <input class="w-0" id="upload-photo" type="file" name="photo" accept=".png, .jpg, .jpeg"
                                    required>
                                <button type="submit" class="btn btn-primary" value="Login">
                                    Update Avatar
                                </button>
                            </form>
                            <button type="button" class="m-2 btn btn-success" data-toggle="modal"
                                data-target="#updateTeacherModal">
                                Update Personal Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endrole

        @role('user-default')
        <div class="d-flex flex-column flex-lg-row">
            <div class="col-12 col-lg-4">
                <img class="stuff-image" src="" alt="person">
            </div>
            <div class="col-12 col-lg-8 mt-5 mt-lg-0">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Group</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->group }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Library Card Code</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->card_code }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Registered on</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->registered_on }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                            @include('user.profile.update-profile-information-form')
                            @endif
                        </div>
                        <hr>
                        <div class="row">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            @include('user.profile.update-password-form')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endrole
    </div>

    {{-- @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
    @include('profile.two-factor-authentication-form')
    @endif
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
    @include('user.profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
    @include('user.profile.update-password-form')
    @endif --}}
</div>
@endsection