<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Simple CMS" />

        <title>RESTAURANTE</title>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href ="{{ asset('css/bootstrap.css') }}">
         <link rel="stylesheet" href ="{{ asset('css/bootstrap.min.css') }}">
          
          
          

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles 
        <style>
            
        </style> -->
        
       
        
        
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">            
                       <h4 class="display-4">RESTAURANTE</h4>         
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <div class="card">
                            <div class="card text-white bg-primary mb-3" style="max-width: auto;">
                                <div class="card-header">{{ __('Registrar') }}</div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Clave') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('Clave')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Clave') }}</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-secondary">
                                                {{ __('Registrar') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-muted">
                        <img src="{{ asset('imagenes/San2.jpg') }}" class="img-fluid" alt="Responsive image">            
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>

