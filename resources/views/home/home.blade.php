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

<link rel="stylesheet" href="{{ asset('css/styleh.css') }}">
@extends('welcome')
@section('title','home')

@section('content')
<header class="masthead">
  <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
      <div class="d-flex justify-content-center">
          <div class="text-center">
              <h1 class="mx-auto my-0 text-uppercase">go to fucking gym lazy ass nigga</h1>
              <h2 class="text-white-50 mx-auto mt-2 mb-5">A Fitness Gym, Website, one page containing our last informations there.</h2>
              <a class="btn btn-primary" href={{ route('login') }}>Get Started</a>
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

      <div class="row gx-0 mb-4 mb-lg-5 d-flex align-items-center">
        <div class="col-xl-8 col-lg-7 ps-1">    
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6473.0193319007985!2d-5.8236827121212045!3d35.7874192933959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c78b2396efd55%3A0x6c6828b31b52f49b!2sMarshan%2C%20Tanger!5e0!3m2!1sfr!2sma!4v1716461700943!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <div class="col-xl-4 col-lg-5 px-3">
            <div class="featured-text text-center text-lg-left">
                <h3 class="text-secondary">Our Location</h3>
                {{-- <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p> --}}
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
      
</section>
<!-- Signup-->
<section class="signup-section" id="signup">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
              <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
              <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
              <!-- * * * * * * * * * * * * * * *-->
              <!-- * * SB Forms Contact Form * *-->
              <!-- * * * * * * * * * * * * * * *-->
              <!-- This form is pre-integrated with SB Forms.-->
              <!-- To make this form functional, sign up at-->
              <!-- https://startbootstrap.com/solution/contact-forms-->
              <!-- to get an API token!-->
              <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                  <!-- Email address input-->
                  <div class="row input-group-newsletter">
                      <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                      <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
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
              </form>
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
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>@endsection
