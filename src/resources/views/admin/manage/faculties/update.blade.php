@extends('layouts.default')

@section('title') ETM - Admin Panel - Update Faculty @endsection
@section('description') NULL @endsection

@section('content')
<div class="container mb-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    <form action="{{ route('update-faculty', $faculty->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Edit <b>Faculty</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-faculties') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                value="{{ $faculty->name }}" required autofocus>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <label for="test">Thumbnail:</label>
            <div id="test" class="form-group upload-thumbnail">
                <label class="btn btn-secondary" for="thumbnail">Browse...</label>
                <input class="w-0" id="thumbnail" name="thumbnail" type="file" accept=".png, .jpg, .jpeg">
            </div>
        </div>
        
        <input type="hidden" name="redirect" value="admin/manage/faculties">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection