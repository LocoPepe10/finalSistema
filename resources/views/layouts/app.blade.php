<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVNTRY</title>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/icon1.png')}}">
    <link rel="shortcut icon" href="{{asset('img/icon2.icon')}}">
    <link rel="stylesheet" href="{{asset('css/bgcolors.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-display">
          <a class="navbar-brand" href="{{ url('/') }}">INVNTRY</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="{{ url('/home') }}" class="nav-link"> Inicio </a>
                    </li>
                    <li>
                        <a href="{{url('/registro')}}" class="nav-link"> Registro </a>
                    </li>
                    @if(Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}" class="nav-link">Inicio de Sesión</a></li>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ url('/logout') }}"> Cerrar Sesión </a>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
    </nav>
    <div class="container">
            @yield('content')  
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
</body>
</html>
