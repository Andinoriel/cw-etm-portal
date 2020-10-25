@extends('layouts.default')

@section('title') Book @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title"> {{ $book->title }} </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="d-flex flex-column flex-lg-row justify-content-around align-items-center h-100">
        <div class="col-12 col-lg-4">
            <img class="book-image" src={{ $book->thumbnail }} alt="book">
        </div>
        <div
            class="book-info d-flex flex-column justify-content-around align-item-center text-justify mt-4 mt-lg-0 px-5">
            {{ $book->short_description }}
            {{ $book->description }}
            {{ $book->url_download }}
        </div>
    </div>
</div>
@endsection