
@if(Auth::user())
@if(Auth::user()->role== "1")
@extends('welcome')
@section('title',"men's exercises")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
<style>
    .page-container {
        margin: 20px;
        padding-top:50px;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        /* width: 100%;
        height: 200px; */
        object-fit: cover;
    }

    .card-content {
        padding: 15px;
        margin-top: auto;
    }

    .card-content a {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .card-content a:hover {
        background-color: #0056b3;
    }

    @media (max-width: 1024px) {
        .card {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
</style>
<div class="page-container">
    @include('items.index1')

    

    <div class="card-container">
        @foreach($exercises as $exercise)
            <div class="card" data-muscle="{{ $exercise['targetMuscle'] }}">
                <img src="{{ $exercise['photo'] }}" alt="{{ $exercise['name'] }}">
                <div class="card-content">
                    <strong>Name:</strong> {{ $exercise['name'] }}<br>
                    <strong>Target Muscle:</strong> {{ $exercise['targetMuscle'] }}<br>
                    <strong>Description:</strong> {{ $exercise['description'] }}<br>
                    <a href="{{ $exercise['videoLink'] }}" target="_blank">Watch Video</a>
                </div>
            </div>




            {{-- <div class="card" data-muscle="{{ $exercise['targetMuscle'] }}">
                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                  <img src="{{ $exercise['photo'] }}" alt="{{ $exercise['name'] }}" class="img-fluid"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><strong>Name:</strong> {{ $exercise['name'] }}</h5>
                  <p class="card-title">Target Muscle:</strong> {{ $exercise['targetMuscle'] }}</p>
                  <p class="card-text">{{ $exercise['description'] }}</p>
                  <a href={{ $exercise['videoLink'] }} target="_blank" class="btn btn-primary" data-mdb-ripple-init>Watch Video</a>
                </div>
              </div> --}}
        @endforeach
    </div>
</div>

<script>
    function filterExercises(selectedMuscles) {
    const cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        const targetMuscles = card.getAttribute('data-muscle').split(',');
        const isVisible = selectedMuscles.some(muscle => targetMuscles.includes(muscle));
        card.style.display = isVisible ? 'block' : 'none';
    });
}

</script>

@endsection

@endif
@endif