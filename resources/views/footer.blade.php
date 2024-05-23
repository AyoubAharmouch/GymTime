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
        /* .footer {
    background-color: rgb(0, 0, 0);
    color: white;
    width: 100%;
    text-align: center;
    padding: 10px 0;
    position: relative;
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
} */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/responsive/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
    </style>
</head>
<body>
            {{-- <div class="Footer mt-3 pt-2">
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
            </div> --}}

            <footer class="footer">
                <div class="container">
                 <div class="row">
                   <div class="footer-col">
                     <h4>company</h4>
                     <ul>
                       <li><a href="#">about us</a></li>
                       <li><a href="#">our services</a></li>
                       <li><a href="#">privacy policy</a></li>
                       <li><a href="#">affiliate program</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>get help</h4>
                     <ul>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">shipping</a></li>
                       <li><a href="#">returns</a></li>
                       <li><a href="#">order status</a></li>
                       <li><a href="#">payment options</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>online shop</h4>
                     <ul>
                       <li><a href="#">watch</a></li>
                       <li><a href="#">bag</a></li>
                       <li><a href="#">shoes</a></li>
                       <li><a href="#">dress</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>follow us</h4>
                     <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                   </div>
                 </div>
                </div>
             </footer>
</body>
</html>
