@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

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
                    <div class="my-3">
                        <h2 class="mb-0">Manage <b>Faculties</b></h2>
                    </div>
                    <div class="my-3 my-md-0 search">
                        <form class="d-flex" action="{{ route('search-faculty') }}" method="get" role="search">
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
            <table class="table table-responsive-md table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Thumbnail</th>
                        <th>
                            <div>
                                <a href="/admin/manage/faculties/create" class="btn btn-success">
                                    <span>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path fill-rule="evenodd"
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </th>
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

                                <a href="/admin/manage/faculties/update-{{ $faculty->id }}" class="btn btn-primary"
                                    role="button">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg>
                                </a>

                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" title="delete">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.18 4l1.528 9.164a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836L12.82 4H3.18zm.541 9.329A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671L14 3H2l1.721 10.329z" />
                                        <path d="M14 3c0 1.105-2.686 2-6 2s-6-.895-6-2 2.686-2 6-2 6 .895 6 2z" />
                                        <path fill-rule="evenodd"
                                            d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z" />
                                    </svg>
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