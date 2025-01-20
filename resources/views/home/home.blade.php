{{--
<style>
  .pag{
      display: flex;
      justify-content: center;
      margin-top: 55px;
  }

  .imgbg{
      color: rgb(195, 194, 194);
      background-image:url('https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      margin:0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
  }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('welcome')
@section('title','home')

@section('content')
<div class="imgbg">
<div class="p-5 ">

<h1 class="text-warning fs-1 ">traine with us</h1>
</div>


</div>

<div>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nobis et voluptatibus eius accusamus alias, ipsam iste! Quidem error possimus facere animi! Blanditiis, assumenda iure!lorem250

  </p>
</div>
@endsection --}}

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



<link rel="stylesheet" href="{{ asset('css/styleh.css') }}">
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
@extends('welcome')
@section('title','home')

@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Go to Gym</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">
                    A Fitness Gym Website, one page containing our latest information here.
                </h2>
                <a class="btn btn-primary" href="{{ route('login') }}">Get Started</a>
            </div>
        </div>
    </div>

</header>
<!-- About-->
<section class="about-section text-center" id="about">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8">
              <h2 class="text-white mb-4">Practice with us.</h2>
              <p class="text-white-50">
                  Train anywhere in the World without any constraints wherever you are.
                  <a href="#page-top">the preview page.</a>
                  Always find the best machines for all your exercises.
              </p>
          </div>
      </div>

      <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
        <!-- Colonne pour Google Maps -->
        <div class="col-12 col-lg-7 mb-4 mb-lg-0">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6473.0193319007985!2d-5.8236827121212045!3d35.7874192933959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c78b2396efd55%3A0x6c6828b31b52f49b!2sMarshan%2C%20Tanger!5e0!3m2!1sfr!2sma!4v1716461700943!5m2!1sfr!2sma"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <!-- Colonne pour le texte -->
        <div class="col-12 col-lg-5 px-4 text-center text-lg-start">
            <div class="featured-text">
                <h3 class="text-secondary">Our Location</h3>
                <p class="text-black-50 mb-0">Find us at Marshan, Tanger! Plan your visit easily with the map provided.</p>
            </div>
        </div>
    </div>


      {{-- <img class="img-fluid" src="https://e7.pngegg.com/pngimages/906/819/png-clipart-logo-gym-tshirt-blue-thumbnail.png" alt="..." /> --}}
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
  <div class="container px-4 px-lg-5">
      <!-- Featured Project Row-->
      <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
          <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Z3ltJTIwcG5nfGVufDB8fDB8fHww" alt="..." /></div>
          <div class="col-xl-4 col-lg-5">
              <div class="featured-text text-center text-lg-left">
                  <h4>Shoreline</h4>
                  <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
              </div>
          </div>
      </div>

      <div class="row gx-0 mb-5 mt-5 mb-lg-0 justify-content-center">
        <div class="col-lg-6 px-5">
            <div class="bg-light text-center h-100 project ">
                <div class="d-flex h-100 ">
                    <div class="project-text  my-auto text-center text-lg-left ">
                        <h4 class="text-black">Misty</h4>
                        <p class="mb-0 text-black-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
          <img class="img-fluid" src="https://images.unsplash.com/photo-1547919307-1ecb10702e6f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fGd5bSUyMHBuZ3xlbnwwfHwwfHx8MA%3D%3D" alt="..." />
        </div>
      <!-- Project One Row-->
      <div class="row gx-0 mb-5 mt-5 mb-lg-0 justify-content-center">
          <div class="col-lg-6"><img class="img-fluid" src="https://images.unsplash.com/photo-1550345332-09e3ac987658?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3Dg" alt="..." /></div>
          <div class="col-lg-6">
              <div class="bg-light text-center h-100 project">
                  <div class="d-flex h-100">
                      <div class="project-text w-100 my-auto text-center text-lg-left">
                          <h4 class="text-black">fitness</h4>
                          <p class="mb-0 text-black-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>



    </div>
      <!-- Project Two Row-->

      <div class="cont mt-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>Coaches</h2>
        </div>
<div class="body">

        <div class='slide-container swiper'>
          <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
              @foreach($coaches as $coach)
              <div class="cardd swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="{{ asset('images/'.$coach->image) }}" alt="{{ $coach->name }}" class="card-img">
                  </div>
                </div>

                <div class="card-content">
                  <h2 class="name">{{ $coach->name }}</h2>
                  <p class="description">{{ $coach->description }}</p>
                  <button class="button">Reserver</button>
                </div>
              </div>
                @endforeach
            </div>
          </div>
          {{-- <button class="prev" onclick="prevSlide()">&#10094</button>
          <button class="next" onclick="nextSlide()">&#10095</button> --}}

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination pag"></div>
        </div>

</div>




        {{-- <div class="coach-slider">
            @foreach($coaches as $coach)
                <div class="card coach-card">
                    <img src="{{ asset('images/'.$coach->image) }}" class="card-img-top" alt="{{ $coach->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $coach->name }}</h5>
                        <p class="card-text">{{ $coach->description }}</p>
                        <a href="{{ route('coaches.edit', $coach->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this coach?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>

</section>
<!-- Signup-->
<section class="signup-section" id="signup">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
              <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
              <h2 class="text-white mb-5">Send your message or your question</h2>
              <!-- * * * * * * * * * * * * * * *-->
              <!-- * * SB Forms Contact Form * *-->
              <!-- * * * * * * * * * * * * * * *-->
              <!-- This form is pre-integrated with SB Forms.-->
              <!-- To make this form functional, sign up at-->
              <!-- https://startbootstrap.com/solution/contact-forms-->
              <!-- to get an API token!-->
              {{-- <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                  <!-- Email address input-->
                  <div class="row input-group-newsletter">
                      <div class="col"><input class="form-control" id="email_id" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                      <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit" onclick="sendMail()">Notify Me!</button></div>
                  </div>
                  <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                  <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                  <!-- Submit success message-->
                  <!---->
                  <!-- This is what your users will see when the form-->
                  <!-- has successfully submitted-->
                  <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3 mt-2 text-white">
                          <div class="fw-bolder">Form submission successful!</div>
                          To activate this form, sign up at
                          <br />
                          <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                      </div>
                  </div>
                  <!-- Submit error message-->
                  <!---->
                  <!-- This is what your users will see when there is-->
                  <!-- an error submitting the form-->
                  <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
              </form> --}}

              <div>
                @if(!Auth::user())
                <input type="text" name="" id="name" placeholder="full name" required> <br>
                <input type="email" name="" id="email_id" placeholder="your email" required> <br>
                @endif

                @if(Auth::user())
                <input type="text" name="" id="name" placeholder="full name" required value={{ Auth::user()->name }} style="display:none;"> <br>
                <input type="email" name="" id="email_id" placeholder="your email" value={{ Auth::user()->email }} style="display:none;" <br>
                @endif
                <textarea name="" id="mssg" cols="15" rows="5" required placeholder="write you message here"></textarea> <br>
                <div class="text-end">
                    <button style="font-family: inherit;font-size: 18px;background: linear-gradient(to bottom, #4dc7d9 0%,#66a6ff 100%);color: white;padding: 0.8em 1.2em;display: flex;align-items: center;justify-content: center;border: none;border-radius: 25px;box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);transition: all 0.3s;" onclick="sendMail()"><div class="svg-wrapper-1">
                    <div class="svg-wrapper">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                      </svg>
                    </div>
                  </div>
                  <span style="display: block;margin-left: 0.4em;transition: all 0.3s;">Send</span></button>
                </div>

              </div>


          </div>
      </div>
  </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5">
          <div class="col-md-4 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                      <h4 class="text-uppercase m-0">Address</h4>
                      <hr class="my-4 mx-auto" />
                      <div class="small text-black-50">Marchan street 49 Nr 59, Tangier,Morocco</div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-envelope text-primary mb-2"></i>
                      <h4 class="text-uppercase m-0">Email</h4>
                      <hr class="my-4 mx-auto" />
                      <div class="small text-black-50"><a href="#!">SpartaGym@gmail.com</a></div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-mobile-alt text-primary mb-2"></i>
                      <h4 class="text-uppercase m-0">Phone</h4>
                      <hr class="my-4 mx-auto" />
                      <div class="small text-black-50">+212 66809-8050</div>
                      <div class="small text-black-50">+212 77213-2783</div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</section>
<!-- Footer-->
{{-- <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div></footer> --}}
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/scrpit.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>@endsection



    <style>
        form {
  max-width: 400px;
  margin: 0 auto;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

textarea {
  resize: vertical; /* Allow vertical resizing */
}
button {
  font-family: inherit;
  font-size: 18px;
  background: linear-gradient(to bottom, #4dc7d9 0%,#66a6ff 100%);
  color: white;
  padding: 0.8em 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  border-radius: 25px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s;
}

button:hover {
  transform: translateY(-3px);
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
}

button:active {
  transform: scale(0.95);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

button span {
  display: block;
  margin-left: 0.4em;
  transition: all 0.3s;
}

button svg {
  width: 18px;
  height: 18px;
  fill: white;
  transition: all 0.3s;
}

button .svg-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  margin-right: 0.5em;
  transition: all 0.3s;
}

button:hover .svg-wrapper {
  background-color: rgba(255, 255, 255, 0.5);
}

button:hover svg {
  transform: rotate(45deg);
}



    </style>

</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "Yfi-VD6Yr2cf4KWZV",
      });
   })();
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

