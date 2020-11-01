@extends('layouts.default')

@section('title') TMD - {{ $book->title }} @endsection
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
            <img class="book-image"
                src={{ Storage::exists($book->thumbnail) ? Storage::url($book->thumbnail) : 'static/' }} alt="book">
        </div>
        <div
            class="book-info d-flex flex-column justify-content-around align-item-center text-justify mt-4 mt-lg-0 px-5">
            <span class="mt-3 text-center book-info-short">{{ $book->short_description }}</span>
            <span class="link-default mt-3">
                Author:
                <a
                    href="/faculties/faculty-{{ $book->Teacher->Cathedra->Faculty->id }}/cathedra-{{ $book->Teacher->Cathedra->id }}/teacher-{{ $book->Teacher->id }}">
                    {{ $book->Teacher->last_name }} {{ $book->Teacher->first_name }}
                    {{ $book->Teacher->mid_name }}
                </a>
            </span>
            <span class="link-default mt-3">
                Subject:
                <a href="/books/by-subject-{{ $book->Subject->id }}">
                    {{ $book->Subject->name }}
                </a>
            </span>
            <span class="mt-5 book-info-long">{{ $book->description }}</span>
            @can('download publication')
            <div class="mt-5 d-flex flex-row justify-content-center align-items-center mb-3">
                <div class="mr-4 condensed">Attachment</div>
                <a class="ml-5 book-info-go" href={{ Storage::url($book->url_download) }}>
                    <div class="px-5 py-3 roboto16">Download</div>
                </a>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection