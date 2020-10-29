@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

@section('content')
<div class="container col-12 col-md-3">
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

    <form action="{{ route('create-cathedra') }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Add New <b>Cathedra</b></h2>
            </div>
            <div class="">
                <a href="{{ route('control-cathedra') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="text" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail" required autofocus>
        </div>
        <div class="form-group">
            <label for="faculty_id">Faculty</label>
            <select class="custom-select" id="faculty_id" name="faculty_id" required autofocus>
                <option selected>Choose...</option>
                @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection