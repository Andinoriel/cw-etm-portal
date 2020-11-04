@extends('layouts.default')

@section('title') ETM - Admin Panel - Create Subject @endsection
@section('description') NULL @endsection

@section('content')
<div class="container mb-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    <form action="{{ route('create-subject') }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Add New <b>Subject</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-subjects') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
        </div>

        <input type="hidden" name="redirect" value="admin/manage/subjects">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection