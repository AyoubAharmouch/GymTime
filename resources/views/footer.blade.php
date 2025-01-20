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
  background-color: rgb(126, 126, 126);
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
.social-links {
            list-style: none;
            display: flex;
            gap: 10px;
        }
        .social-links a {
            display: block;
            width: 24px;
            height: 24px;
            
        }
        .social-links a svg {
            width: 70%;
            height: 70%;
            fill: #000;
        }
        .social-links a:hover svg {
            fill: #0077b5;
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <footer class="footer">
                <div class="container">
                 <div class="row">
                   <div class="footer-col">
                     <h4>company</h4>
                     <ul>
                       <li><a href="#">about us</a></li>
                       <li><a href="#">spartagym</a></li>
                       <li><a href="#">contact</a></li>
                       <li><a href="#">courses</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>get help</h4>
                     <ul>
                       <li><a href="#">contact us</a></li>
                       <li><a href="#">call us</a></li>
                       <li><a href="#">email us</a></li>
                       <li><a href="#">visit our location</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>online courses</h4>
                     <ul>
                       <li><a href="#">vip</a></li>
                       <li><a href="#">vip coaches</a></li>
                       <li><a href="#">video exercises</a></li>
                       <li><a href="#">video call</a></li>
                     </ul>
                   </div>
                   <div class="footer-col">
                     <h4>follow us</h4>
                     <div class="social-links">
                        <a class="text-center" href="https://www.facebook.com/yourprofile" target="_blank" rel="noopener noreferrer">
                            <svg class="text-center ps-2 pt-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0C141.09 0 89.55 50.17 89.55 140.23v75.11H0v92.66h89.55V512h107.4V288z"></path></svg>
                        </a>
                        <a href="https://twitter.com/yourprofile" target="_blank" rel="noopener noreferrer">
                            <svg class="text-center ps-2 pt-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-1.299-84.792-31.188-98.112-72.772 6.498.974 12.995 1.948 19.818 1.948 9.421 0 18.843-1.299 27.614-3.573-48.081-9.747-84.143-51.98-84.143-103.001v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.897 46.782-104.934 104.934-104.934 30.213 0 57.455 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.897 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a>
                        <a href="https://www.instagram.com/yourprofile" target="_blank" rel="noopener noreferrer">
                            <svg class="text-center ps-2 pt-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9S160.5 370.9 224.1 370.9 339 319.6 339 255.9 287.7 141 224.1 141zm0 186.6c-39.5 0-71.7-32.2-71.7-71.7 0-39.5 32.2-71.7 71.7-71.7 39.5 0 71.7 32.2 71.7 71.7 0 39.5-32.2 71.7-71.7 71.7zm146.4-194.3c0 14.9-12 26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 26.9-26.9 26.9 12 26.9 26.9zm76.1 27.2c-1.7-35.7-9.9-67.3-35.7-92.9s-57.2-34-92.9-35.7c-36.6-2.1-146.6-2.1-183.2 0-35.7 1.7-67.3 9.9-92.9 35.7s-34 57.2-35.7 92.9c-2.1 36.6-2.1 146.6 0 183.2 1.7 35.7 9.9 67.3 35.7 92.9s57.2 34 92.9 35.7c36.6 2.1 146.6 2.1 183.2 0 35.7-1.7 67.3-9.9 92.9-35.7s34-57.2 35.7-92.9c2.1-36.6 2.1-146.6 0-183.2zm-48.1 232c-7.8 19.7-22.9 35.9-42.6 42.6-29.5 11.7-99.5 9-132.9 9s-103.4 2.6-132.9-9c-19.7-7.8-35.9-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.9s-2.6-103.4 9-132.9c7.8-19.7 22.9-35.9 42.6-42.6 29.5-11.7 99.5-9 132.9-9s103.4-2.6 132.9 9c19.7 7.8 35.9 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.9s2.6 103.4-9 132.9z"></path></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer">
                            <svg class="text-center ps-2 pt-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zm-46.44-343C24.39 105 0 80.61 0 50.14A50.1 50.1 0 0 1 100.14 50a50.1 50.1 0 0 1 50.14 50.1c0 30.47-24.39 54.86-54.86 54.86zM447.9 448h-92.68V302.4c0-34.8-12.4-58.5-43.44-58.5-23.66 0-37.68 15.86-43.9 31.14-2.24 5.46-2.8 13.06-2.8 20.72V448h-92.76s1.22-241.1 0-266.4h92.68v37.8c-.2.3-.5.7-.7 1h.7v-1c12.34-19 34.5-46.06 84-46.06 61.34 0 107.28 40.06 107.28 126.2z"></path></svg>
                        </a>
                     </div>
                   </div>
                 </div>
                </div>
             </footer>
</body>
</html>