@extends('layouts.default')

@section('title') ETM - Faculties @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">Faculties</h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        @foreach($faculties as $faculty)
        <div class="faculty-block col-12 col-sm-6 col-md-4 col-lg-3 my-2">
            <div class="content">
                <a href="/faculties/faculty-{{ $faculty->id }}">
                    <div class="content-overlay"></div>
                    <img class="content-image"
                        src={{ Storage::exists($faculty->thumbnail) ? Storage::url($faculty->thumbnail) : '/static/placeholder-ins.jpg' }}>
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">{{ $faculty->name }}</span>
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
        @endforeach
    </div>
</div>
@endsection