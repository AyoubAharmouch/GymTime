@extends('adminlte::page')

@section('title', 'Subscriber Details')

@section('content_header')
    <h1>Details</h1>
@stop

@section('content')
<form id="updateForm">
    @csrf
    <fieldset>
        <legend>Information about {{ $subscription->last_name }} {{ $subscription->first_name }}</legend>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text cont label-name" id="basic-addon3">Last Name</span>
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ $subscription->last_name }}" required>
                <button type="button" class="btn btn-success change" subscription-field="last_name">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">First Name</span>
                <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" value="{{ $subscription->first_name }}" required>
                <button type="button" class="btn btn-success change" subscription-field="first_name">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Sex</span>
                <select name="sex" id="sex" class="form-control status-select edit" subscription-id="{{ $subscription->id }}">
                    <option value="F" {{ $subscription->sex == "F" ? 'selected' : '' }}>Female</option>
                    <option value="M" {{ $subscription->sex == "M" ? 'selected' : '' }}>Male</option>
                </select>
                <button type="button" class="btn btn-success change" subscription-field="sex">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">CIN</span>
                <input id="cin" type="text" class="form-control" name="cin" placeholder="K12****" value="{{ $subscription->CIN }}" required>
                <button type="button" class="btn btn-success change" subscription-field="cin">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Date of Birth</span>
                <input id="birth" type="date" class="form-control" name="birth" value="{{ $subscription->birth }}" required>
                <button type="button" class="btn btn-success change" subscription-field="birth">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Email</span>
                <input id="email" type="email" class="form-control" name="email" placeholder="email@gmail.com" value="{{ $subscription->email }}" required>
                <button type="button" class="btn btn-success change" subscription-field="email">Update</button>
            </div>
        </div>
        
        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Phone Number</span>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="0********/+212*****" value="{{ $subscription->phone }}" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" required>
                <button type="button" class="btn btn-success change" subscription-field="phone">Update</button>
            </div>
        </div>

        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Address</span>
                <input id="address" type="text" class="form-control" name="address" value="{{ $subscription->address }}" required>
                <button type="button" class="btn btn-success change" subscription-field="address">Update</button>
            </div>
        </div>

        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text label-name" id="basic-addon3">Type of Abonment</span>
                <select name="payement" id="payement" class="form-control status-select edit" subscription-id="{{ $subscription->id }}">
                    <option value="Monthly" {{ $subscription->payement == "Monthly" ? 'selected' : '' }}>Monthly</option>
                    <option value="3 Month" {{ $subscription->payement == "3 Month" ? 'selected' : '' }}>3 Month</option>
                    <option value="6 Month" {{ $subscription->payement == "6 Month" ? 'selected' : '' }}>6 Month</option>
                    <option value="Yearly" {{ $subscription->payement == "Yearly" ? 'selected' : '' }}>Yearly</option>
                </select>
                <a href="/subscriptions">
                    <button type="button" class="btn btn-success ">Update</button>
    
                    </a>                </div>
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
                const field = this.getAttribute('subscription-field');
                const value = document.getElementById(field).value;
                const id = {{ $subscription->id }};
                const token = document.querySelector('input[name="_token"]').value;

                fetch(`/subscriptions/${id}`, {
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
                .then(subscription => {
                    if (subscription.success) {
                        alert('Subscription updated successfully');
                    } else {
                        alert('Error updating subscription');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });

        // Delete button event listener
        document.getElementById('deleteButton').addEventListener('click', function () {
            const id = {{ $subscription->id }};
            const token = document.querySelector('input[name="_token"]').value;

            if (confirm('Are you sure you want to delete this user?')) {
                fetch(`/subscriptions/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(subscription => {
                    if (subscription.success) {
                        alert('User deleted successfully');
                        window.location.href = '{{ route("admin") }}';
                    } else {
                        alert('Error deleting user');
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.change').forEach(button => {
        button.addEventListener('click', function () {
            // Get the field name and value from the clicked button and corresponding input field
            const field = this.getAttribute('subscription-field');
            const value = document.getElementById(field).value;
            const id = {{ $subscription->id }};
            const token = document.querySelector('input[name="_token"]').value;

            // Prepare the data to be sent to the server
            const data = {
                [field]: value,
                _token: token
            };

            // Send a PUT request to update the subscription
            fetch(`/subscriptions/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(subscription => {
                if (subscription.success) {
                    alert('Subscription updated successfully');
                } else {
                    alert('Error updating subscription');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Delete button event listener
    document.getElementById('deleteButton').addEventListener('click', function () {
        // Implement delete functionality here...
    });
});

</script>
@stop
