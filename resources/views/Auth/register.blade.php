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
    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+00 1234 567</a></p>
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

        @auth
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('register')}}"><span class="fas fa-user"></span> Sign Up</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{url('logout')}}"><span class="fas fa-sign-in-alt"></span> LOG OUT</a>
        </li>
        @endauth
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
      <li class="nav-item">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/manager')}}">Manger</a>
        </li>
        @endauth
      
        @auth

        <li class="nav-item">
          <a class="nav-link" href="{{url('/products')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/sales')}}">Sales</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="{{url('/clients')}}">Clients</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('/clients')}}">bassam</a>
        </li>-->
       
        @endauth

      </ul>
    
    
    </div>
    </div>
  </nav>
 </section>


    <section class="bg-image">

<div class="signup-form">
    <form   action="{{url('register')}}" method="POST">
      @csrf
        <h2>Register</h2>
        <p class="hint-text-register">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="name" formControlName="firstName" placeholder="First Name" required="required"></div>
                <!-- <div class="col"><input type="text" class="form-control" name="last_name"    formControlName="lastName" placeholder="Last Name" required="required"></div> -->
            </div>    
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number"  formControlName="phone" >
        </div>
        <!-- <div class="form-group">
            <input type="number" class="form-control" name="id" placeholder="id"  formControlName="id" required="required">
        </div> -->
        <div class="form-group">
            <input type="number" class="form-control" name="salary" placeholder="salary"  formControlName="salary" required="required">
        </div>
        <!-- <div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="job Date"  formControlName="date" required="required">
        </div> -->
        <div class="form-group">
            <input type="number" class="form-control" name="clientsNumber"   formControlName="clientNumbers" placeholder="Clients Number" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="rate" formControlName="CommistionRate" placeholder="Commition Rate" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" formControlName="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" formControlName="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" required="required">
        </div>        
      
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" >Register Now</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a routerLink="/login">Sign in</a></div>
</div>

</section>

    <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  

      </body>
</html>
