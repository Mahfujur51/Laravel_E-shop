<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css" >
     <link rel="stylesheet" href="{{asset('backend/css/toastr.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper bg-info">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="{{ route('index') }}">Lara-E-SHOP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{Route::currentRouteName()=='about'?'active' : ''}}">
                            <a class="nav-link" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{Route::currentRouteName()=='contact'?'active' : ''}}">
                            <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                        </li>
                        <li class="nav-item {{Route::currentRouteName()=='product'?'active' : ''}}">
                            <a class="nav-link" href="{{ route('product') }}">All Product</a>
                        </li>
                         <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-dark" type="submit">Search</i>
                        </button>
                    </form>


                    </ul>
                      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    <div class="footer bg-info p-3">
        <div class="text-center">
            Mahfujur &copy; <?php echo Date("Y");?>
        </div>
    </div>


    @include('layouts.inc.script')
</body>
</html>
