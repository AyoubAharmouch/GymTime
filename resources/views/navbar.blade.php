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
            
        }
    </style>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-md  navbar-dark bg-dark fixed-top px-2">
        <a href="#" class="navbar-brand">LOGO</a>
        <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#nav1">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">link1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">link2</a></li>
                <li class="nav-item"><a class="nav-link"  href="#">link3</a></li>
            </ul>
        </div>

   </nav> --}}


   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand " href="page-top">SpartaGym</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link " href="#projects">spartagym</a></li>
                <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href={{ route('women-exercises') }}>Exercises</a></li> --}}
                @if(Auth::user())
                
                    @if(Auth::user()->role==='1')
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                                    

                @endif
                @if(Auth::user()->role==='0')
                <li class="nav-item"><a class="nav-link" href={{ __('Log Out') }}>lolo</a></li>
                

                @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
<script src="{{ asset('js/scrpit.js') }}"></script>

  
</body>
</html>