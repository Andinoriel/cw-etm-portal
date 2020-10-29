@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            Admin Panel — Faculties Control
        </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container my-5">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table">
        <div class="table-wrapper">
            <div class="table-title mb-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="">
                        <h2>Manage <b>Faculties</b></h2>
                    </div>
                    <div class="">
                        <a href="/admin/control/faculty/create" class="btn btn-success">
                            <span>Add New Faculty</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Thumbnail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculties as $faculty)
                    <tr>
                        <td>{{ $faculty->id }}</td>
                        <td>{{ $faculty->name }}</td>
                        <td>{{ $faculty->thumbnail }}</td>
                        <td>
                            <form action="{{ route('delete-faculty', $faculty->id) }}" method="post">
                                @csrf

                                <a href="/admin/control/faculty/update-{{ $faculty->id }}" class="btn btn-primary"
                                    role="button">Edit</a>

                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" title="delete">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center my-5">
                {{ $faculties->withQueryString()->links('pagination.default') }}
            </div>

        </div>
    </div>
</div>

@endsection