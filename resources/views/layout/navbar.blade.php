<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->

    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark  gradient-bg2 px-4 py-3">
        <a class="navbar-brand" href="{{ route('Home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(Request::is('/')) active @endif">
                    <a class="nav-link " href="{{ route('Home') }}">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item  {{ Request::is('company') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('Company') }}">
                        <i class="fa fa-envelope-o"></i>
                        Companies
                    </a>
                </li>
                <li class="nav-item @if(Request::is('empolyee.index')) active @endif">
                    <a class="nav-link" href="{{ route('empolyee.index') }}">
                        <i class="far fa-user"></i>
                        Empolyees
                    </a>
                </li>
                
            </ul>
            
           
        </div>
    </nav>

    @yield('content')


    <script src="https://kit.fontawesome.com/81c959b8a5.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
  </body>

</body>

</html>