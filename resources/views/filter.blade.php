@extends('adminlte::page')

@section('title', 'List of Subscribers')

@section('content_header')
    <h1>List of {{ $etat === 'M' ? 'Male' : 'Female' }} Subscribers</h1>
@stop

@section('content')
<div class="container mt-2">
    <div class="card-body">
        <table class="table table-bordered table-striped" id="table_show">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Sex</th>
                    <th class="action-column">Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href=".\2.png">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var sex = "{{ $etat }}";
        var ajaxUrl = "{{ url('admin') }}/" + sex;

        $('#table_show').DataTable({
            processing: true,
            serverSide: true,
            order: [[0, 'desc']],
            ajax: ajaxUrl,
            columns: [
                { data: 'id', name: 'id' },
                { data: 'last_name', name: 'last_name' },
                { data: 'first_name', name: 'first_name' },
                { data: 'sex', name: 'sex' },
                { data: 'action', name: 'action' }
            ]
        });
    });
</script>
@stop
