<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale =1.0" >
    <title> Sales Management Company</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/A.style.css.pagespeed.cf.mMBCBFkmOw.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  
  <section class="ftco-section ">
    <div class="container">
    </div>
    </div>
    </div>
    <div class="wrap">
    <div class="container">
    <div class="row ">
    <div class="col-3 d-flex justify-content-start ">
    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">01205082343</a></p>
    </div>
    <div class="col-3 d-flex  justify-content-center">
    <div class="social-media">
    <p class="mb-0 d-flex">
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
    </p>
    </div>
    </div>
    
    <div class="col-6 d-flex   justify-content-end">
    <ul class="nav navbar-nav ml-auto">
      @guest
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
        @endguest

     
    
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('logout')}}"><span class="fas fa-sign-in-alt"></span> LOG OUT</a>
        </li> -->
            </ul>

      </div>

     
    
      
    </div>
    </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light " id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="index.html">EASY <span>COMPANY</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars"></span> Menu
    </button>
    <!-- <a class="navbar-brand" href="#">Our Website</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
    
      @auth
      <li class="nav-item active">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/manager')}}">Manger</a>
        </li>
    

        <li class="nav-item">
          <a class="nav-link" href="{{url('/products')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/sales')}}">Sales</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="{{url('/clients')}}">Clients</a>
        </li>
       
       
        @endauth

      </ul>
    
    
    </div>
    </div>
  </nav>
 </section>
<section class="slider">
  <div class="layer">
    <p>
      We make <br />
      your Buisness <br />
      <span>GOOD</span>
    </p>
  </div>
  <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-ride="carousel"
  >
    <div class="carousel-indicators">
      <button
        type="button"
        data-target="#carouselExampleIndicators"
        data-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-target="#carouselExampleIndicators"
        data-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-target="#carouselExampleIndicators"
        data-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/image_1.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="images/image_2.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="images/image_3.jpg" class="d-block w-100" alt="..." />
      </div>
    </div>
  </div>
</section>
  <section class="about-us" id="about">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-10 col-lg-8">
          <div class="header-section">
            <h2 class="title">About Us</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">

      
        <div class="col-lg-10  col-md-12 col-sm-12 d-flex align-content-center">
          <p class="writer">
            Easy App is a creative solution to organize the work of individuals, institutions and companies working in commercial activities and deal with the installment sale system. The app service includes the ability to add customers and data related to them, manage goods and inventory, detailed printed reports for all inputs, and follow up on work in an integrated manner
          
          </p>
        </div>


      </div>

  </section>
<footer id="contact">
                          <div class="footer-top">
                              <div class="container">
              
                                  <div class="row">
              
                                      <div class=" information col-lg-3">
                                          <h4>Information</h4>
                                          <ul class="address1 ">
                                              <li>
                                                  <i class="fas fa-map-marker-alt"></i>
                                                  Beni suef , Egypt
                                              </li> 
                                              <li>
                                                  <i class="fa fa-envelope"></i>
                                                  <a href="mailto:bassamramadan964@gmail.com"> bassamramadan964@gmail.com </a>
                                              </li>
                                              <li>
                                                  <i class="fas fa-phone-alt"></i>
                                                  <a href="tel: (011) 59350591"> (011) 59350591</a>
                                              </li>
                                              <li>
                                                  <i class="fas fa-phone-alt"></i>
                                                  <a href="tel:(011) 59350591"> (011) 59350591</a>
                                              </li>
                                          </ul>
                                      </div>
              
                                      <div class=" col-lg-3">
                                          <div class="follow">
                                              <h4>Follow us</h4>
                                              <ul class="social-icon d-flex">
                                                  <li>
                                                      <a href="" target="_blank">
                                                          <i class="fab fa-facebook-f"></i>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="" target="_blank">
                                                          <i class="fab fa-instagram"></i>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="" target="_blank">
                                                          <i class="fab fa-linkedin-in"></i>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="" target="_blank">
                                                          <i class="fab fa-twitter"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class=" map col-lg-6">
              
 <div id="">
<section id ="contact" >

  <form class="contact100-form validate-form">
  <div class="wrap-input100 validate-input" data-validate="Name is required">
  <span class="label-input100">Full Name:</span>
  <input class="input100" type="text" name="name" placeholder="Enter full name">
  <span class="focus-input100"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
  <span class="label-input100">Email:</span>
  <input class="input100" type="text" name="email" placeholder="Enter email addess">
  <span class="focus-input100"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Phone is required">
  <span class="label-input100">Phone:</span>
  <input class="input100" type="text" name="phone" placeholder="Enter phone number">
  <span class="focus-input100"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Message is required">
  <span class="label-input100">Message:</span>
  <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
  <span class="focus-input100"></span>
  </div>
  <div class="container-contact100-form-btn">
  <button class="contact100-form-btn">
  <span>
  Submit
  <i class="fab fa-long-arrow-right m-l-7" aria-hidden="true"></i>
  </span>
  </button>
  </div>
  </form>
  </div>
  </div>
  
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12 d-flex justify-content-center">
                                          <p class="copyright ">
                                              © Reserved For <a href="" target="_blank">Easy Company 2022 </a>
                                          </p>
                                      </div>
              
                                  </div>
                              </div>
                          </div>
              
                      </footer>
              
                      <!--End Footer-->

<script>
  var txt = $('.writer').text();
var timeOut;
var txtLen = txt.length;
var char = 0;
$('.writer').text('|');
(function typeIt() {   
    var humanize = Math.round(Math.random() * (200 - 30)) + 30;
    timeOut = setTimeout(function() {
        char++;
        var type = txt.substring(0, char);
        $('.writer').text(type + '|');
        typeIt();

        if (char == txtLen) {
            $('.writer').text($('.writer').text().slice(0, -1)); // remove the '|'
            clearTimeout(timeOut);
        }

    }, 15);
}());
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.ShDXkdKWrZ.js"></script><script>eval(mod_pagespeed_H0qN4W9wXo);</script>
    <script>eval(mod_pagespeed_WmiCx0VWp6);</script>
    <script>eval(mod_pagespeed_JBM6ZoM8er);</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7080d759de77d785","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous">
      </script>
     <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

</body>
</html>