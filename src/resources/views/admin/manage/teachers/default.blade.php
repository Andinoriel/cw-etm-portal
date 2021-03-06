@extends('layouts.default')

@section('title') ETM - Admin Panel - Manage Teachers @endsection
@section('description') NULL @endsection

@section('modals')
@include('admin.manage.teachers.invitation')
@endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            Admin Panel
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
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="">
                        <h2>Manage <b>Teachers</b></h2>
                    </div>
                    <div class="my-3 my-md-0 search">
                        <form class="d-flex" action="{{ route('search-teacher') }}" method="get" role="search">
                            <input type="text" name="search" placeholder="Search" class="search-field"
                                value="{{$query ?? ''}}">
                            <button class="search-button" type="submit">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                    <path fill-rule="evenodd"
                                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-responsive-lg table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First&nbsp;Name</th>
                        <th>Last&nbsp;Name</th>
                        <th>Mid&nbsp;Name</th>
                        <th>Degree</th>
                        <th>Cathedra</th>
                        <th>User</th>
                        <th>Registered&nbsp;On</th>
                        <th class="d-flex justify-content-center align-items-center">
                            <div>
                                <a href="/admin/manage/teachers/generate-invitation" class="btn btn-info">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-link"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z" />
                                        <path
                                            d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z" />
                                    </svg>
                                </a>
                            </div>
                            <button type="button" class="m-2 btn btn-danger" data-toggle="modal"
                                data-target="#invitationModal">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path fill-rule="evenodd"
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                    <circle cx="3.5" cy="5.5" r=".5" />
                                    <circle cx="3.5" cy="8" r=".5" />
                                    <circle cx="3.5" cy="10.5" r=".5" />
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id ?? '' }}</td>
                        <td>{{ $teacher->first_name ?? '' }}</td>
                        <td>{{ $teacher->last_name ?? '' }}</td>
                        <td>{{ $teacher->mid_name ?? '' }}</td>
                        <td>{{ $teacher->degree ?? '' }}</td>
                        <td>{{ $teacher->Cathedra->name ?? '' }}</td>
                        <td>
                            <a href="{{ route('search-user', 'search=' . $teacher->user_id) }}">
                                {{ $teacher->user_id }}
                            </a>
                        </td>
                        <td>{{ $teacher->registered_on }}</td>

                        <td>
                            <form action="{{-- route('delete-cathedra', $cathedra->id) --}}" method="post">
                                @csrf

                                <a href="/admin/manage/teachers/update-{{ $teacher->id }}" class="btn btn-primary"
                                    role="button">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg>
                                </a>

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