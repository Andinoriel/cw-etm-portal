@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            Admin Panel — Teachers Control
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
                        <h2>Manage <b>Teachers</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mid Name</th>
                        <th>Degree</th>
                        <th>Cathedra</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->first_name }}</td>
                        <td>{{ $teacher->last_name }}</td>
                        <td>{{ $teacher->mid_name }}</td>
                        <td>{{ $teacher->degree }}</td>
                        <td>{{ $teacher->Cathedra->name }}</td>
                        <td>
                            <form action="{{-- route('delete-cathedra', $cathedra->id) --}}" method="post">
                                @csrf

                                <a href="/admin/control/teacher/update-{{ $teacher->id }}" class="btn btn-primary"
                                    role="button">Edit</a>

                                {{-- @method('DELETE')
                                <button class="btn btn-danger" type="submit" title="delete">
                                    Delete
                                </button> --}}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center my-5">
                {{ $teachers->withQueryString()->links('pagination.default') }}
            </div>

        </div>
    </div>
</div>

@endsection