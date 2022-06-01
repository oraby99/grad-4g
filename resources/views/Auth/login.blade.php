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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    
    <a class="navbar-brand" href="#">Our Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/manager')}}">Manger</a>
        </li>
    
      
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
        @endauth

      </ul>
    
      <ul class="nav navbar-nav ml-auto">
      @guest
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
        @endguest

        @auth
     
        <li class="nav-item">
          <a class="nav-link" href="{{url('logout')}}"><span class="fas fa-sign-in-alt"></span> LOG OUT</a>
        </li>
        @endauth
      </ul>
    </div>
  </nav> -->

    <div class="text-center">
     <!-- <a href="{{url('login')}}" class="trigger-btn" data-toggle="modal"><button class="btn btn-primary m-2">Login </button></a> -->
     <!-- <a href="#myModalManger" class="trigger-btn" data-toggle="modal"><button class="btn btn-primary m-2">Login as Manger</button></a> -->
    
    </div>
        <!-- <div id="myModalManger" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">				
                        <h4 class="modal-title">Manger Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" placeholder="Password" required="required">					
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>    -->
          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->

        <div >
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">				
                        <h4 class="modal-title">Employee Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('login')}}" method="POST">
                          @csrf
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="email" name ="email" class="form-control" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password"  name ="password" class="form-control" placeholder="Password" required="required">					
                            </div>
                            <div class="form-group">
                                <button type ="submit"  class="btn btn-primary btn-block btn-lg">LOGIN</button>

                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>   
       
    
        
    
    

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/index.js"></script>
  
</body>
</html>
<!-- @extends('layout')
      @section('title')
       LOGIN
      @endsection
      @section('content')
@if(request()->session()->has('registermessage'))

<div class="alert alert-success">
    <p>{{request()->session()->get('registermessage')}}</p>
</div>
@endif

    <form action="{{url('login')}}" method="POST">
     @csrf
    <input type ="email" name ="email" placeholder="ENTER YOUR email">
    <br><br>
    <input type ="password" name ="password" placeholder="ENTER YOUR password">
    <br><br>
    <button type ="submit">LOGIN</button>
    </form>
   @endsection -->
