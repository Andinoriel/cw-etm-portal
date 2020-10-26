@extends('layouts.default')

@section('title') TMD - Faculties @endsection
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
                    <img class="content-image" src={{ $faculty->thumbnail }}>
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">{{ $faculty->name }}</span>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection