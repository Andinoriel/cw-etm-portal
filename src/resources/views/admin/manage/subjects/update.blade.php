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

    <form action="{{ route('update-subject', $subject->id) }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Edit <b>Subject</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-subjects') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                value="{{ $subject->name }}" required autofocus>
        </div>

        <input type="hidden" name="redirect" value="admin/manage/subjects">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection