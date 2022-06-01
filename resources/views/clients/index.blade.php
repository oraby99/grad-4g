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
      <li class="nav-item active">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item ">
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

    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            
            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;                        
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;                        
                    });
                } 
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
        </script>
        
        
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4">
                                <h2>Manage <b>Clients</b></h2>
                            </div>
                            <div class="col-sm-4">
                                <form class="form-inline my-2 my-lg-0" action="{{url('/search3')}}" method="get" >
                                @csrf 
                                <input class="form-control mr-sm-2" name ="cli" type="search" placeholder="Search" aria-label="Search">
                                    <!-- <button class="btn btn-success my-2 my-sm-0" type="submit">SEARCH</button> -->
                                  </form>
            
                            </div>
                            <div class="col-sm-4">
                                <a href="#addClientModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Client</span></a>
                            </div>
                        </div>
                    </div>
                  
                       
                    <table class="table table-striped table-hover">
                        
                        <thead>
                        <tr>
                                
                                <th> ID</th>
                                <th>Client Name  </th>
                                <th>Address</th>
                                <th>Phone</th>
                               <th> National Id </th>
                           <!-- <th>installments Date</th>  -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client) 
                        
                            <tr>
                                <td>{{$client->id}}</td>
                                <td><a href='{{ url("/clients/$client->id") }}'>{{$client->name}}</a></td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->nationalid}}</td>

                                <td>
                                    <a href='{{url("/clients/$client->id/edit")}}' class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <form action='{{url("/clients/$client->id")}}' method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete">
                           
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>        
        </div>

        <!-- ADD Modal HTML -->
        <div id="addClientModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                @if($errors->any())

                    @foreach( $errors->all() as $error)

                    <p> {{$error}} </p>

                    @endforeach
                    @endif
                <form action="{{url('/clients/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Client</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>National iD</label>
                                <input type="text" name='nationalid' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name='address' required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name='phone' class="form-control" required>
                            </div>		
                           					
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="Add" name="add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
      
        <!-- Delete Modal HTML -->
        <div id="deleteProductModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Product</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>