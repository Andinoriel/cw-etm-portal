@extends('layouts.default')

@section('title')
@if(Request::is('list/by-teacher-*'))
TMD - {{ $books[0]->Teacher->last_name }} {{ $books[0]->Teacher->first_name }} {{ $books[0]->Teacher->mid_name }}
— Files
@else
TMD - All Files
@endif
@endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            @if(Request::is('list/by-teacher-*'))
            {{ $books[0]->Teacher->last_name }} {{ $books[0]->Teacher->first_name }} {{ $books[0]->Teacher->mid_name }}
            — Files
            @else
            All Files
            @endif
        </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex flex-column-reverse flex-lg-row">
        <div class="posts col-lg-8 mx-md-0">
            @foreach($books as $book)
            <div class="row post mx-auto mt-2">
                <div class="post-inner">
                    <a class="text-justify" href="#">
                        <h2 class="link second-title">{{ $book->title }}</h2>
                    </a>
                    <div class="d-md-block d-flex flex-column">
                        <span class="span-with-line mr-3">
                            Date:
                            <span class="color_cont">{{ $book->updated_at }}</span>
                        </span>
                        <span class="ml-md-3 ml-0">
                            Author:
                            <a
                                href="/faculties/faculty-{{ $book->Teacher->Cathedra->Faculty->id }}/cathedra-{{ $book->Teacher->Cathedra->id }}/teacher-{{ $book->Teacher->id }}">
                                <span class="color_cont">
                                    {{ $book->Teacher->last_name }} {{ $book->Teacher->first_name }}
                                    {{ $book->Teacher->mid_name }}
                                </span>
                            </a>
                        </span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">{{ $book->short_description }}</p>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center my-5">
                {{ $books->links('pagination.default')}}
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0 mt-lg-2">
            <div class="d-flex flex-row justify-content-center align-items-start search">
                <form class="d-flex">
                    <input type="text" placeholder="Search" class="search-field">
                    <button class="search-button">
                        <img src="{{ asset('images/search.svg') }}" width="21" height="21">
                    </button>
                </form>
            </div>
            <div class="d-none d-lg-flex flex-column mt-5 ml-0 ml-lg-4 undefined-block">
                <h3>Something</h3>
                <a href="#">Something</a>
                <a href="#">Something</a>
                <a href="#">Something</a>
            </div>
        </div>
    </div>
</div>
@endsection