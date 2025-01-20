@extends('adminlte::page')

@section('title', 'Subscriptions')

@section('content_header')
    <h1>Subscriptions Management</h1>
@stop

@section('content')
<div class="container mt-3">
    <h2>Active Subscriptions</h2>
    @if($subscriptions->isEmpty())
        <p>No active subscriptions found.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>CIN</th>
                    <th>Birth</th>
                    <th>Payment</th>
                    <th>Start Date</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->id }}</td>
                        <td>{{ $subscription->last_name }}</td>
                        <td>{{ $subscription->first_name }}</td>
                        <td>{{ $subscription->email }}</td>
                        <td>{{ $subscription->phone }}</td>
                        <td>{{ $subscription->address }}</td>
                        <td>{{ $subscription->sex }}</td>
                        <td>{{ $subscription->CIN }}</td>
                        <td>{{ $subscription->birth }}</td>
                        <td>{{ $subscription->payment }}</td>
                        <td>{{ $subscription->created_at }}</td>
                        <td>{{ $subscription->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@stop
