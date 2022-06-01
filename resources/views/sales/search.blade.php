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
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    
    <a class="navbar-brand" href="#">Our Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      @auth
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
        @endauth

      </ul>
    
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
  </nav>
  

<h3>SEARCH RESULT   </h3>
<table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product id</th>
                            <th>client id</th>
                            <th>number of pieces</th>
                            <th>price</th>
                            <th>provider value</th>
                            <th>rest</th>
                            <th>value of installment</th>
                            <th>type of installment</th>
                            <th>installment period  </th>
                            <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $sale) 

                            <tr>
                            <tr>
                                    <td>{{$sale->id}}</td>
                                    <td>{{$sale->product->name}}</td>
                                    <td>{{$sale->client->name}}</td>
                                    <td>{{$sale->count }}</td>
                                    <td>{{$sale->count * $sale->product->price}}</td>
                                    <td>{{$sale->provider}}</td>
                                    <td>{{$sale->count * $sale->product->price - $sale->provider}}</td>
                                    <td>{{$sale->instprice}}</td>
                                    <td>{{$sale->insttype}}</td>
                                    <td>
                                        @if("$sale->insttype" == "Monthly")
                                        {{($sale->count * $sale->product->price - $sale->provider) / $sale->instprice }}
                                        @else
                                        {{($sale->count * $sale->product->price - $sale->provider) / $sale->instprice  }}
                                        @endif
                                    </td>
                                    <td>{{$sale->created_at}}</td>
                                        <!-- <td>
                                            <a href='{{url("/sales/$sale->id/edit")}}' class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <form action='{{url("/sales/$sale->id")}}' method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="delete">
                                            </form>
                                        </td> -->
                                    </tr>
                            </tr>

                            @endforeach
                          
                        </tbody>
  
                    </table>


     


<script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>
