<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-lzjgDkKJWWf4BeX5T04UQUK7nN3U+QbeD6U/Bc5EmiEbdzVOq2G3go7fC3FQxbF" crossorigin="anonymous"></script>
    <style>
        .Footer{
    background-color: rgb(0, 0, 0);
    color:white;
    position: fixed;;
    bottom: 0px;
    width:100%;
}
.footlink{
    color:rgb(158, 158, 158);
    text-decoration: none;
}
#ulfoot{
    list-style-type: none;
}
.Last-footer{
    background-color: rgb(0, 0, 0);
    color: white;
}
    </style>
</head>
<body>
            <div class="Footer mt-3 pt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-12 ft-1">
                            <h3><span>take your </span>move</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum ea quo ex ullam laboriosam magni totam, facere eos iure voluptate.</p>
                            <div class="footer-icons justify-content-between">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-12 ft-2">
                            <h5>Quick Links</h5>
                            <ul id="ulfoot">
                                <li class="nav-item">
                                    <a class="footlink" href="/principale" id="" >Bikester       </a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="footlink" href="{{ route('index') }}">All Products</a> --}}
                                </li>
                                <li class="nav-item">
                                    <a class="footlink" href="/category/MotorCycle">motorCycle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="footlink" href="/category/Motorsproduct">Motor's product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="footlink" href="./Favorite">fav</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 ft-3">
                            <h5>Quick Links</h5>
                            <p><i class="fa-solid fa-phone-volume"></i> +212 3121864083</p>
                            <p><i class="fa-solid fa-envelope"></i> bikester@gmail.com</p>
                            <p><i class="fa-solid fa-paper-plane"></i> Aharmouch, Ayoub.</p>
                        </div>
                    </div>
                </div>
                <div class='Last-footer text-center'>
                    <p>※ Mr. Aharmouch Ayoub ※ </p>
                </div>
            </div>
</body>
</html>
