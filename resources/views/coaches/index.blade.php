@if(Auth::user() && Auth::user()->role === "0")

@extends('adminlte::page')

@section('title', 'List of Coaches')

@section('content_header')
    <h1>Coaches</h1>
@stop

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-3">
        </div>

        <form method="GET" action="/coaches">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search for courses" value="{{ request()->input('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coaches as $coach)
                    <tr>
                        <td>{{ $coach->name }}</td>
                        <td>{{ $coach->description }}</td>
                        <td>
                            <a href="{{ route('coaches.edit', $coach->id) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                            <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this coach?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-dark">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$coaches->links('vendor.pagination.bootstrap-4')}}
        </div>
            </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <style>
        .pagination .page-link {
            color: gray; /* Text color */
            border-color: gray; /* Border color */
        }

        .pagination .page-item.active .page-link {
            background-color: gray; /* Active page background color */
            border-color: gray; /* Active page border color */
            color: white; /* Active page text color */
        }

        .pagination .page-item.disabled .page-link {
            color: lightgray; /* Disabled page color */
        }
    </style>

    <style>
        /* Additional custom styles */
        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
    </style>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@stop

@endif
