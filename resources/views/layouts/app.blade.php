<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPCOA - Indicadores') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style=" background-image:  linear-gradient(#c9d9f3, #ffffff);">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
            <a href="https://www.uacj.mx"><img id="logo" src="./img/logouacj.png" width="350px" align="middle">

            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav-item dropdown">
                        <!-- Authentication Links -->
                        @guest
                            <img id="logo" src="./img/DGPDI.png" width="110px" align="middle">&nbsp;&nbsp;&nbsp;
                            <img id="logo" src="./img/SPCOA.png" width="110px" align="middle">
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><b>{{ __('Iniciar Sesión') }}</b></a>
                            </li-->

                            <!--
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><b>{{ __('Registrar') }}</b></a>
                                </li>
                            @endif
                            -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')






    </div>
</body>
<footer style="margin-top: 5%">
    <div id='pie' style=" background-color:#003CA6">
    <center>
      <p id="direccion" class="text-white" style="background-color:#003CA6;font-family:inherit;font-size:14px;"> Av. Plutarco Elías Calles #1210 • Fovissste Chamizal • Ciudad Juárez, Chihuahua, México • C.P. 32310 • Tel. (+52) 688.21.00 al 09</p>
    </center>
    </div>

</footer>
</html>
