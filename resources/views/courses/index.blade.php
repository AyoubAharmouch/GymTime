

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    

@extends('welcome')
@section('title','Gym Courses')

@section('content')
<body>
    <div class="container mt-2 kurz imgbg">
        <h1 class="text-center mb-4">Gym Courses</h1>

        <div class="mb-4 text-end">
            <a href="{{ route('courses.pdf') }}" class="btn btn-danger text-end" target="_blank">Download PDF</a>
        </div>

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
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="mt-3" style="text-align: right;">
                {{ $courses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</body>
@endsection
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
