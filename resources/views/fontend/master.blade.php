<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css" >
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


                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-dark" type="submit">Search</i>
                        </button>
                    </form>
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
