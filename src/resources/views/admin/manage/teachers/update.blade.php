@extends('layouts.default')

@section('title') TMD - Admin Panel - Update Teacher @endsection
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

    <form action="{{ route('update-teacher', $teacher->id) }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Edit <b>Teacher</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-teachers') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                value="{{ $teacher->first_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                value="{{ $teacher->last_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Mid Name</label>
            <input type="text" class="form-control" id="mid_name" name="mid_name" placeholder="Mid Name"
                value="{{ $teacher->mid_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree"
                value="{{ $teacher->degree }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="cathedra_id">Cathedra</label>
            <select class="custom-select" id="cathedra_id" name="cathedra_id" required autofocus>
                @foreach ($cathedras as $cathedra)
                @if($teacher->Cathedra->id === $cathedra->id)
                    <option value="{{ $cathedra->id }}" selected>{{ $cathedra->name }}</option>
                @else
                    <option value="{{ $cathedra->id }}">{{ $cathedra->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">About</label>
            <input type="text" class="form-control" id="about" name="about" placeholder="About"
                value="{{ $teacher->about }}">
        </div>

        <input type="hidden" name="redirect" value="admin/manage/teachers">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection