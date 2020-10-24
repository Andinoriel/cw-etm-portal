@extends('layouts.default')

@section('title') List @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">All files</h1>
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
                            <span class="color_cont">
                                {{ $book->Teacher->last_name }} {{ $book->Teacher->first_name }} {{ $book->Teacher->mid_name }}
                            </span>
                        </span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">{{ $book->short_description }}</p>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center my-5">
                {{ $books->links('vendor.pagination.default')}}
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0 mt-lg-2">
            <div class="">
                <form class="search-form m-0" action="#" method="get">
                    <span>
                        <input type="text" placeholder="Find...">
                        <button type="submit">Find</button>
                    </span>
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