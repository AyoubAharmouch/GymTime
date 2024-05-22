@extends('adminlte::page')

@section('title', 'subscriber')

@section('content_header')
    <h1>details</h1>
@stop

@section('content')
<form id="updateForm">
    @csrf
    <fieldset>
        <legend>Information about {{ $data->last_name }} {{ $data->first_name }}</legend>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text cont label-name" id="basic-addon3">Last Name</span>
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ $data->last_name }}" required>
                <button type="button" class="btn btn-success change" data-field="last_name">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">First Name</span>
                <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" value="{{ $data->first_name }}" required>
                <button type="button" class="btn btn-success change" data-field="first_name">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Sex</span>
                <select name="sex" id="sex" class="form-control status-select edit" data-id="{{ $data->id }}">
                    <option value="F" {{ $data->sex == "F" ? 'selected' : '' }}>Female</option>
                    <option value="M" {{ $data->sex == "M" ? 'selected' : '' }}>Male</option>
                </select>
                <button type="button" class="btn btn-success change" data-field="sex">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">CIN</span>
                <input id="cin" type="text" class="form-control" name="cin" placeholder="K12****" value="{{ $data->CIN }}" required>
                <button type="button" class="btn btn-success change" data-field="cin">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Date of Birth</span>
                <input id="birth" type="date" class="form-control" name="birth" value="{{ $data->birth }}" required>
                <button type="button" class="btn btn-success change" data-field="birth">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Email</span>
                <input id="email" type="email" class="form-control" name="email" placeholder="email@gmail.com" value="{{ $data->email }}" required>
                <button type="button" class="btn btn-success change" data-field="email">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Phone Number</span>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="0********/+212*****" value="{{ $data->phone }}" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" required>
                <button type="button" class="btn btn-success change" data-field="phone">Update</button>
            </div>
        </div>

        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Address</span>
                <input id="phone" type="text" class="form-control" name="phone"  value="{{ $data->address }}" required>
                <button type="button" class="btn btn-success change" data-field="phone">Update</button>
            </div>
        </div>

        <button type="button" class="btn btn-danger" id="deleteButton">Delete User</button>

    </fieldset>
</form>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<style>
    .label-name {
        width: 25vh;
    }
</style>
@stop

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.change').forEach(button => {
            button.addEventListener('click', function () {
                const field = this.getAttribute('data-field');
                const value = document.getElementById(field).value;
                const id = {{ $data->id }};
                const token = document.querySelector('input[name="_token"]').value;

                fetch(`/admin/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({ [field]: value })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('Data updated successfully');
                    } else {
                        alert('Error updating data');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });

        // Delete button event listener
        document.getElementById('deleteButton').addEventListener('click', function () {
            const id = {{ $data->id }};
            const token = document.querySelector('input[name="_token"]').value;

            if (confirm('Are you sure you want to delete this user?')) {
                fetch(`/admin/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        alert('ouiiii');
                        

                        // throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                    if (data.success) {
                        alert('User deleted successfully');
                        // Redirect to admin route
                        window.location.href = '{{ route("admin") }}';
                    } else {
                        alert('Error deleting user');
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
</script>
@stop



