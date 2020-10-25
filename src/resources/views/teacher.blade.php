@extends('layouts.default')

@section('title') TMD - {{ $teacher->last_name }} {{ $teacher->first_name }} {{ $teacher->mid_name }} @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">{{ $teacher->last_name }} {{ $teacher->first_name }} {{ $teacher->mid_name }}</h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="d-flex flex-column flex-lg-row justify-content-around align-items-center h-100">
        <div class="col-12 col-lg-4">
            <img class="stuff-image" src={{ $teacher->thumbnail }} alt="person">
        </div>
        <div
            class="stuff-person d-flex flex-column justify-content-around align-item-center text-justify mt-4 mt-lg-0 px-5">
            <span class="mt-5 text-center stuff-person-degree">{{ $teacher->degree }}</span>
            <div class="mt-4 d-flex flex-column align-items-start">
                <span class="stuff-person-study-info">
                    Faculty: 
                    <a href="/faculties/faculty-{{ $teacher->Cathedra->Faculty->id }}">
                        {{ $teacher->Cathedra->Faculty->name }}
                    </a>
                </span>
                <span class="stuff-person-study-info mt-2">
                    Cathedra:  
                    <a href="/faculties/faculty-{{ $teacher->Cathedra->Faculty->id }}/cathedra-{{ $teacher->Cathedra->id }}">
                        {{ $teacher->Cathedra->name }}
                    </a>
                </span>
            </div>

            <span class="mt-5 stuff-person-about">{{ $teacher->about }}</span>

            <div class="mt-5 d-flex flex-row justify-content-center align-items-center mb-3">
                <div class="mr-4 condensed">Files</div>
                <a class="ml-5 stuff-person-go" href="/books/by-teacher-{{ $teacher->id }}">
                    <div class="px-5 py-3 roboto16">Show</div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection