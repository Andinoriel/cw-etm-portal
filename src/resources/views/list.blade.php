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
        <div class="col-lg-8 mx-md-0">
            <div class="row post mx-auto">
                <div class="post-inner">
                    <a href="#">
                        <h2 class="link second-title">Caption</h2>
                    </a>
                    <div class="d-md-block d-flex flex-column">
                        <span class="span-with-line mr-3">Date: <span class="color_cont">June 13,
                                2019</span></span>
                        <span class="ml-md-3 ml-0">Author: <span class="color_cont">John Smith</span></span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque delectus sequi iusto
                        quod, at totam soluta ex tempora fuga itaque, vel nemo asperiores unde, officia
                        reiciendis temporibus. Veritatis, repellat odio.
                    </p>
                </div>
            </div>
            <div class="row post mx-auto mt-2">
                <div class="post-inner">
                    <a href="#">
                        <h2 class="link second-title">Caption</h2>
                    </a>
                    <div class="d-md-block d-flex flex-column">
                        <span class="span-with-line mr-3">Date: <span class="color_cont">June 13,
                                2019</span></span>
                        <span class="ml-md-3 ml-0">Author: <span class="color_cont">John Smith</span></span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque delectus sequi iusto
                        quod, at totam soluta ex tempora fuga itaque, vel nemo asperiores unde, officia
                        reiciendis temporibus. Veritatis, repellat odio.
                    </p>
                </div>
            </div>
            <div class="row post mx-auto mt-2">
                <div class="post-inner">
                    <a href="#">
                        <h2 class="link second-title">Caption</h2>
                    </a>
                    <div class="d-md-block d-flex flex-column">
                        <span class="span-with-line mr-3">Date: <span class="color_cont">June 13,
                                2019</span></span>
                        <span class="ml-md-3 ml-0">Author: <span class="color_cont">John Smith</span></span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque delectus sequi iusto
                        quod, at totam soluta ex tempora fuga itaque, vel nemo asperiores unde, officia
                        reiciendis temporibus. Veritatis, repellat odio.
                    </p>
                </div>
            </div>
            <div class="row post mx-auto mt-2">
                <div class="post-inner">
                    <a href="#">
                        <h2 class="link second-title">Caption</h2>
                    </a>
                    <div class="d-md-block d-flex flex-column">
                        <span class="span-with-line mr-3">Date: <span class="color_cont">June 13,
                                2019</span></span>
                        <span class="ml-md-3 ml-0">Author: <span class="color_cont">John Smith</span></span>
                    </div>
                    <p class="roboto16 mt-3 text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque delectus sequi iusto
                        quod, at totam soluta ex tempora fuga itaque, vel nemo asperiores unde, officia
                        reiciendis temporibus. Veritatis, repellat odio.
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center my-5">
                <div class="pagination roboto18lt">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0">
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
