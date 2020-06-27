<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>@yield('title')</title>
</head>
<body>
<div class="wrapper bg-info">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">First item</li>
                <li class="list-group-item">Second item</li>
                <li class="list-group-item">Third item</li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success ">Add to cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success">Add to cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success">Add to cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success">Add to cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success">Add to cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{asset('product/1.jpg')}}" height="300" alt="">
                        </div>
                        <div class="card-header">
                            Demo
                        </div>
                        <div class="card-body">
                            <h2>Price: 120$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-outline-success">Add to cart</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="footer bg-info p-3">
    <div class="text-center">
        Mahfujur &copy; <?php echo Date("Y");?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>