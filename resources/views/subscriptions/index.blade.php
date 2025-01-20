@extends('adminlte::page')

@section('title', 'Subscriptions')

@section('content_header')
    <h1>Subscriptions Management</h1>
@stop

@section('content')
<div class="container mt-3">
    <h2 class="mt-5">Expired Subscriptions</h2>
    @if($expiredSubscriptions->isEmpty())
        <p>No expired subscriptions found.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Sex</th>
                    <th>CIN</th>
                    <th>Payment</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expiredSubscriptions as $expiredSubscription)
                
                    <tr>
                        <td>{{ $expiredSubscription->id }}</td>
                        <td>{{ $expiredSubscription->last_name }}</td>
                        <td>{{ $expiredSubscription->first_name }}</td>
                        <td>{{ $expiredSubscription->email }}</td>
                        <td>{{ $expiredSubscription->phone }}</td>
                        <td>{{ $expiredSubscription->sex }}</td>
                        <td>{{ $expiredSubscription->CIN }}</td>
                        <td>{{ $expiredSubscription->payement }}</td>
                        <td>{{ $expiredSubscription->start_date }}</td>
                        <td>{{ $expiredSubscription->end_date }}</td>
                        <td>{{ $expiredSubscription->created_at }}</td>
                        <td>{{ $expiredSubscription->updated_at }}</td>
                        <td><a class="btn btn-outline-dark text-center" href="{{ url('/subscriptions/'.$expiredSubscription->id) }}">Voir</a></td>                    </tr>
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
