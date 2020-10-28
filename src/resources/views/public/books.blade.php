@extends('layouts.default')

@section('title')
@switch(Request::url())
@case(Request::is('books/by-teacher-*'))
{{ $books[0]->Teacher->last_name }} {{ $books[0]->Teacher->first_name }} {{ $books[0]->Teacher->mid_name }}
— Files
@break

@case(Request::is('books/by-subject-*'))
{{ $books[0]->Subject->name }} — Files
@break

@case(Request::is('books/search*'))
Search — {{ $query}}
@break

@default
All Files
@endswitch
@endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            @switch(Request::url())
            @case(Request::is('books/by-teacher-*'))
            {{ $books[0]->Teacher->last_name }} {{ $books[0]->Teacher->first_name }} {{ $books[0]->Teacher->mid_name }}
            — Files
            @break

            @case(Request::is('books/by-subject-*'))
            {{ $books[0]->Subject->name }} — Files
            @break

            @case(Request::is('books/search*'))
            Search — {{ $query}}
            @break


            @default
            All Files
            @endswitch
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
                    <span class="link-default-2 roboto28smbd">
                        <a href="/books/book-{{ $book->id }}">{{ $book->title }}</a>
                    </span>
                    <div>
                        <div class="d-flex flex-column flex-wrap flex-md-row">
                            <span class="mr-3">
                                Updated at:
                                <span class="color-cont">{{ $book->updated_at }}</span>
                            </span>
                            @if(!Request::is('books/by-teacher-*'))
                            <span class="ml-md-3 ml-0">
                                Author:
                                <span class="link-default">
                                    <a
                                        href="/faculties/faculty-{{ $book->Teacher->Cathedra->Faculty->id }}/cathedra-{{ $book->Teacher->Cathedra->id }}/teacher-{{ $book->Teacher->id }}">
                                        {{ $book->Teacher->last_name }} {{ $book->Teacher->first_name }}
                                        {{ $book->Teacher->mid_name }}
                                    </a>
                                </span>
                            </span>
                            @endif
                            @if(!Request::is('books/by-subject-*'))
                            <span class="w-100">
                                Subject:
                                <span class="link-default">
                                    <a href="/books/by-subject-{{ $book->Subject->id }}">
                                        {{ $book->Subject->name }}
                                    </a>
                                </span>
                            </span>
                            @endif
                        </div>
                    </div>
                    <p class="roboto16 mt-3 text-justify">{{ $book->short_description }}</p>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center my-5">
                {{ $books->withQueryString()->links('pagination.default') }}
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0 mt-lg-2">
            <div class="d-flex flex-row justify-content-center align-items-start search">
                <form class="d-flex" action="/books/search" method="get" role="search">
                    @csrf

                    <input type="text" name="search" placeholder="Search" class="search-field">
                    <button class="search-button" type="submit">
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