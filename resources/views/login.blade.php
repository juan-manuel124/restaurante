<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Simple CMS" />

        <title>RESTAURANTE</title>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href ="{{ asset('css/bootstrap.css') }}">
         <link rel="stylesheet" href ="{{ asset('css/bootstrap.min.css') }}">
         <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
          
          

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
    </head>
    <body>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card text-center">
            <div class="card-header">            
               <h1 class="display-1">RESTAURANTE</h1>         
            </div>
          <div class="card-body">
            <h5 class="card-title"></h5>
                <p class="card-text">@if (Route::has('login'))
                    @auth
                      <div class="form-group">                        
                           <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                       </div>
                           
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Ingreso</a>
                        

            
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary">Registrar</a>
                               
                        @endif
                    @endauth
                    @endif
                </p>
            
          </div>
          <div class="card-footer text-muted">
          <img src="{{ asset('imagenes/San2.jpg') }}" class="img-fluid" alt="Responsive image">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          </div>
        </div>
        </div>
        </div>


        <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
          
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
    </body>
</html>
