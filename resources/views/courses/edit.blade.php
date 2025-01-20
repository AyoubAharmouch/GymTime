



@if(Auth::user())
    @if(Auth::user()->role=== "0")

@extends('adminlte::page')

@section('title', 'edit course')

@section('content_header')

@stop

@section('content')

    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Course</h1>

        <form method="POST" action="{{ route('courses.update', $course->id) }}">
            @csrf
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Course Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $course->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="instructor">Instructor</label>
                <input type="text" name="instructor" id="instructor" class="form-control" value="{{ $course->instructor }}" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="text" name="time" id="time" class="form-control" value="{{ $course->time }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
            <a href="{{ url('/courses') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@stop

    @section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @stop


    @section('js')

   
@stop

    @endif


    @endif

