@if(Auth::user())
    @if(Auth::user()->role=== "0")

@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1 class=" ">Gym Courses</h1>

@stop

@section('content')

<div class="container  kurz imgbg">


    <!-- Search Form -->
    <form method="GET" action="{{ url('/courses') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for courses" value="{{ $search ?? '' }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Instructor</th>
                    <th>Time</th>
                    <th>Actions</th> <!-- Add this line -->

                </tr>
            </thead>
            <tbody>
                @if($courses->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No courses found</td>
                    </tr>
                @else
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->instructor }}</td>
                            <td>{{ $course->time }}</td>
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-secondary">Update</a> <!-- Add this line -->
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div>
            {{$courses->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
</div>
@stop

    @section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

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
    
    @stop


    @section('js')

   
@stop

    @endif


    @endif
