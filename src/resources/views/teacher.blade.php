@extends('layouts.default')

@section('title') {{ $teacher->last_name }} {{ $teacher->first_name }} {{ $teacher->mid_name }}  @endsection
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
<div class="container">
    <div class="d-flex flex-row flex-wrap flex-lg-nowrap justify-content-around align-items-center my-5">
        <div>
            <img class="stuff-image" src={{ $teacher->thumbnail }} alt="person">
        </div>
        <div class="text-center text-lg-left mt-4 mt-lg-0">
            <span class="stuff-person-info"> {{ $teacher->degree }} </span>
            <div><span class="condensed"> {{ $teacher->about }} </span></div>
        </div>
    </div>
</div>
@endsection