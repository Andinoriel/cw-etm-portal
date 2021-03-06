@extends('layouts.default')

@section('title') ETM - Profile - Create File @endsection
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

    <form action="{{ route('create-book') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Add New <b>File</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-files') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required autofocus>
        </div>
        <div class="form-group">
            <label for="name">Short Description</label>
            <input type="text" class="form-control" id="short_description" name="short_description"
                placeholder="Short Description" required autofocus>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description"
                rows="6" required autofocus></textarea>
        </div>
        <div class="form-group">
            <label for="subject_id">Choose subject...</label>
            <select class="custom-select" id="subject_id" name="subject_id" autofocus>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Or add manually</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" autofocus>
        </div>
        <div class="form-group">
            <input class="w-0" id="upload-file" type="file" name="file"
                accept=".pdf, .doc, .docx, .docm, .rtf, .xls, .xlsx, .md, " required>
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

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#subject').change(function () {
            if ($(this).val().length > 0) {
                $('#subject_id').prop('disabled', true)
            } else {
                $('#subject_id').prop('disabled', false)
            }
        })
    })
</script>
@endsection