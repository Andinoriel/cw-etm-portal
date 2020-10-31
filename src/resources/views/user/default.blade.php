@role('user-teacher')
@include('user.profile.update')
@endrole

@extends('layouts.default')

@section('title') TMD - Personal @endsection
@section('description') NULL @endsection

@section('content')
<div class="d-flex flex-column align-items-center">
    @if (session('status'))
    <div>{{ session('status') }}</div>
    @endif

    <div class="container">
        <div class="text-center my-5">
            <h1 class="title"></h1>
            <div class="d-flex flex-row justify-content-center double-color-line">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="d-flex flex-column flex-lg-row justify-content-around align-items-center h-100">
            @role('user-teacher')
            <div class="col-12 col-lg-4">
                <img class="" src="{{ Storage::url($teacher->image) }}" alt="person">
                <form action="{{ route('upload-photo')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="photo">
                    <button type="submit" class="submit" value="Login">
                        Submit
                    </button>
                </form>
            </div>
            @endrole
            <div class="d-flex flex-column justify-content-around align-item-center text-justify mt-4 mt-lg-0 px-5">
                <div class="d-flex flex-column">
                    @role('user-teacher')

                    <span>First Name: {{ $teacher->first_name ?? '' }}</span>
                    <span>Last Name: {{ $teacher->last_name ?? '' }}</span>
                    <span>Mid Name: {{ $teacher->mid_name ?? '' }}</span>
                    <span>Degree: {{ $teacher->degree ?? '' }}</span>
                    <span>Faculty: {{ $teacher->Cathedra->Faculty->name ?? '' }}</span>
                    <span>Cathedra: {{ $teacher->Cathedra->name ?? '' }}</span>

                    <button type="button" class="m-2 btn btn-success" data-toggle="modal"
                        data-target="#updateTeacherModal">
                        Update Personal Info
                    </button>

                    @endrole

                    @role('user-default')

                    <span>First Name: {{ $student->first_name ?? '' }}</span>
                    <span>Last Name: {{ $student->last_name ?? '' }}</span>
                    <span>Mid Name: {{ $student->mid_name ?? '' }}</span>
                    <span>Group: {{ $student->group ?? '' }}</span>
                    <span>Library Card Code: {{ $student->card_code ?? '' }}</span>

                    @endrole


                    
                    @unlessrole('super-admin')
                    
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                    @include('user.profile.update-profile-information-form')
                    @endif
                    

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    @include('user.profile.update-password-form')
                    @endif

                    @endunlessrole
                </div>
            </div>
        </div>
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