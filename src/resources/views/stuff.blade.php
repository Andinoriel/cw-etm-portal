@extends('layouts.default')

@section('title') {{ $cathedra->name }} - Stuff @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">{{ $cathedra->name }} - Stuff</h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        @foreach($cathedra->teachers as $teacher)
        <div class="teacher-block col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
            <img class="content-image" src={{ $teacher->thumbnail }}>
            <a class="mt-3" href="/faculties/faculty-{{ $faculty->id }}/cathedra-{{ $cathedra->id }}/teacher-{{ $teacher->id }}">
                <h4 class="text-center">{{ $teacher->last_name }} {{ $teacher->first_name }} {{ $teacher->mid_name }} </h4>
            </a>
            <p class="text-center">{{ $teacher->degree }}</p>
        </div>
        @endforeach
    </div>
    @endsection