<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    strong{
        width:40%;
    }
</style>
@if($message=Session::get('success'))

{{-- <div class="alert alert-success alert-block"> --}}
        <strong> 
            <div class="alert alert-success d-flex align-items-center ps-5 ms-5" role="alert">
                <div>
                    {{$message}}
                </div>
            </div>
        </strong>
{{-- </div> --}}


@endif


@if($message=Session::get('danger'))

<div class="alert alert-danger alert-block">
    <strong> {{$message}}</strong>
</div>


@endif
