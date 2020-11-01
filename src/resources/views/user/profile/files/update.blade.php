@extends('layouts.default')

@section('title') TMD - Personal - Files @endsection
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

    <form action="{{ route('update-book', $book->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                value="{{ $book->title }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Short Description</label>
            <input type="text" class="form-control" id="short_description" name="short_description"
                value="{{ $book->short_description }}" placeholder="Short Description" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                value="{{ $book->description }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select class="custom-select" id="subject_id" name="subject_id" required autofocus>
                @foreach ($subjects as $subject)
                @if($book->Subject->id === $subject->id)
                <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                @else
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input class="w-0" id="upload-file" type="file" name="file"
                accept=".pdf, .doc, .docx, .docm, .rtf, .xls, .xlsx, .md, " value="{{ $book->url_download }}">
        </div>

        <input type="hidden" name="redirect" value="profile/files">
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success submit" value="Login">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection