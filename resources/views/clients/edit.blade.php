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
    
                    @if($errors->any())
                    @foreach( $errors->all() as $error)
                    <p> {{$error}} </p>
                    @endforeach
                    @endif 
                     <form class="w-50 m-auto pt-5" action='{{url("/clients/$client->id")}}' method="post" enctype="multipart/form-data ">
                        @csrf
                        @method("PUT")
                  

                        <div class="modal-header">						
                            <h4 class="modal-title">EDIT CLIENT</h4>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label> Product Name</label>
                                <input type="text" name="name" value="{{ $client->name}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>National Id</label>
                                <input type="text" class="form-control" value="{{ $client->nationalid}}" name="nationalid" required >
                            </div>		
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{ $client->address}}" name="address" required >
                            </div>	
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{ $client->phone}}" name="phone" required >
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="EDIT" name="add">
                        </div>
                    </form>
                

     <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>
 