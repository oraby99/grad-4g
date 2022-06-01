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
                    <!-- <form action="{{url('/products/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Product</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label> Product Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                           
                           
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>		
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="cat" required >
                            </div>		
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" required >
                            </div>	
                            <div class="form-group">
                                <label>Number OF pieces</label>
                                <input type="number" class="form-control" name="count" required >
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="Add" name="add">
                        </div>
                    </form> -->

              <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->


                    <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>