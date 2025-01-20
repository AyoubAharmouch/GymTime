@if(Auth::user())
    @if(Auth::user()->role=== "0")

@extends('adminlte::page')

@section('title', 'add new coach')

@section('content_header')
<h1>add New Coach</h1>
@stop

@section('content')
<form action="{{ route('coaches.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div>
        <label for="" class="form-label col-lg-12 col-md-4" for='name'>Name:</label>
        <input type="text" class="form-control col-lg-12 col-md-8" name="name" placeholder="full Name" value="{{ old('name') }}" required>
        
    </div>
    {{-- <div>
        <label for="" class="form-label col-lg-12 col-md-8">Description:</label>
        <textarea name="description" id="" cols="20" rows="5" class="col-lg-12 col-md-8 form-control"></textarea>
    </div> --}}

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" value="{{ old('description') }}" cols="20" rows="5" required></textarea>
    </div>
    <div>

        {{-- <label class="form-label" for="customFile">Image:</label>
<input type="file" class="form-control" id="customFile" name="image" id="image" /> --}}

<label for="" class="form-label col-lg-12 col-md-4">image :</label>
        <input type="file" class="form-control-file col-lg-12 col-md-8"  name="image" id='image' value="{{ old('image') }}" required>
    </div>

<div class='text-end'>
    <button type="submit" class="btn btn-primary m-3 text-end  btn-outline-ligh">
        {{ __('Add') }}
    </button>
</div>
    
</form>
    @stop

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    @stop


    @section('js')

    
@stop

    @endif


    @endif

   

    

