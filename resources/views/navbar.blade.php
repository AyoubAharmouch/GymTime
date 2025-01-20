<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-lzjgDkKJWWf4BeX5T04UQUK7nN3U+QbeD6U/Bc5EmiEbdzVOq2G3go7fC3FQxbF" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <style>
        .navbar{
            position: fixed;
            top:0px;
            margin-bottom: 10px;
            
        }
    </style>
</head>
<body>
    


   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand " href="/home">SpartaGym</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="/home/#about">About</a></li>
                <li class="nav-item"><a class="nav-link " href="/home/#projects">spartagym</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href={{ route('women-exercises') }}>Exercises</a></li> --}}
                <li class="nav-item"><a class="nav-link" href='/courses'>courses</a></li>
                @if(Auth::user())
                
                    @if(Auth::user()->role==='1')
                    {{-- @if(Auth::user()->userInfo->sex === 'F') --}}
                    <li class="nav-item"><a class="nav-link " href='/women-exercises'>women-exercises</a></li>
                        {{-- @else --}}
                        <li class="nav-item"><a class="nav-link" href='/men-exercises'>men-exercises</a></li>
                    {{-- @endif --}}
@endif
@endif
<li class="nav-item"><a class="nav-link" href="/home/#signup">Contact</a></li>

@if(Auth::user())
                
                    @if(Auth::user()->role==='1')
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                                    

                @endif

                @if(Auth::user()->role==='0')
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>                

                @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
<script src="{{ asset('js/scrpit.js') }}"></script>

  
</body>
</html>