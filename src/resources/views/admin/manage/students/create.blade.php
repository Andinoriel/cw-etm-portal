@extends('layouts.default')

@section('title') ETM - Admin Panel - Create Student @endsection
@section('description') NULL @endsection

@section('content')
<div class="container mb-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    <form action="{{ route('create-student') }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Add New <b>Student</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-students') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required
                autofocus>
        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required
                autofocus>
        </div>
        <div class="form-group">
            <label for="name">Mid Name</label>
            <input type="text" class="form-control" id="mid_name" name="mid_name" placeholder="Mid Name" required
                autofocus>
        </div>
        <div class="form-group">
            <label for="name">Group</label>
            <input type="text" class="form-control" id="group" name="group" placeholder="Group" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Library Card Code</label>
            <input type="text" class="form-control" id="card_code" name="card_code" placeholder="Library Card Code"
                required autofocus>
        </div>

        <input type="hidden" name="redirect" value="admin/manage/students">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection