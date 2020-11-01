@extends('layouts.default')

@section('title') TMD - Admin Panel - Update Student @endsection
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

    <form action="{{ route('update-student', $faculty->id) }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Edit <b>Student</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-student') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                value="{{ $student->first_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                value="{{ $student->last_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Mid Name</label>
            <input type="text" class="form-control" id="mid_name" name="mid_name" placeholder="Mid Name"
                value="{{ $student->mid_name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Group</label>
            <input type="text" class="form-control" id="group" name="group" placeholder="Group"
                value="{{ $student->group }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Library Card Code</label>
            <input type="text" class="form-control" id="card_code" name="card_code" placeholder="Library Card Code"
                value="{{ $student->card_code }}" required autofocus>
        </div>

        <input type="hidden" name="redirect" value="admin/manage/students">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection