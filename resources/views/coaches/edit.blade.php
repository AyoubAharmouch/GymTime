@if(Auth::user())
    @if(Auth::user()->role=== "0")

@extends('adminlte::page')

@section('title', 'liste of gamer')

@section('content_header')
<h1>Edit Coach</h1>

@stop

@section('content')
<form action="{{ route('coaches.update', $coach->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $coach->name }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $coach->description }}</textarea>
    </div>
    {{-- <div>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
    </div> --}}

    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control-file">
        <small>Current File: {{ $coach->image }}</small> <!-- Display current filename -->
    </div>
<div class="text-end">

    <button type="submit">Update</button>
</div>
</form>


    @stop

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

    <style>
        
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>

    @stop


    @section('js')

    
@stop

    @endif


    @endif

    