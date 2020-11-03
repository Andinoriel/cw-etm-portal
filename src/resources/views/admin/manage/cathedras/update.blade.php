@extends('layouts.default')

@section('title') ETM - Admin Panel - Update Cathedra @endsection
@section('description') NULL @endsection

@section('content')
<div class="container mb-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('update-cathedra', $cathedra->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Edit <b>Cathedra</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-cathedras') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                value="{{ $cathedra->name }}" required autofocus>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <label for="test">Thumbnail:</label>
            <div id="test" class="form-group upload-thumbnail">
                <label class="btn btn-secondary" for="thumbnail">Browse...</label>
                <input class="w-0" id="thumbnail" name="thumbnail" type="file" accept=".png, .jpg, .jpeg">
            </div>
        </div>
        <div class="form-group">
            <label for="faculty_id">Faculty</label>
            <select class="custom-select" id="faculty_id" name="faculty_id" required autofocus>
                @foreach ($faculties as $faculty)
                @if($cathedra->Faculty->id === $faculty->id)
                    <option value="{{ $faculty->id }}" selected>{{ $faculty->name }}</option>
                @else
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <input type="hidden" name="redirect" value="admin/manage/cathedras">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection