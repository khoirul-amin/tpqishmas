<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>TPQ Ishlahul Masalik</title>
    <style>
        .main-wrapper {
            height: 100vh;  
        }
        .link-menu{
            padding: 10px;
            width:98%;
            margin-left: 1%;
            margin-top: 10px;
            border-radius: 5px;
            font-weight: 600;
            /* border-radius: 15px; */
        }
        .link-menu:hover{
            color: #37947d;
        }
        .aktif{
            background: #37947d;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            color: white;
        }
        .aktif:hover{
            color: white;
        }
        .link-menu-a{
            text-decoration: none;
            color: #212529;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0 main-wrapper">
        <div class="row m-0 h-md-100 h-100">
            <div class="col-sm-3 p-0 d-sm-none d-md-block d-none shadow-sm" id="menu">
                <div class="pt-3 pb-3 bg-white text-bold shadow-sm">
                    Oke
                </div>
                <nav class="mt-3">
                    <a href="#" class="link-menu-a">
                        <div class="link-menu aktif">
                            <i class="fa fa-bolt mr-3"></i> 
                            <span>Petir Cok</span>
                        </div>
                    </a>
                    @for ($i = 0; $i < 5; $i++)
                        <a href="#" class="link-menu-a">
                            <div class="link-menu">
                                <i class="fa fa-bookmark"></i>
                                <span>Cobak</span>
                            </div>
                        </a>
                    @endfor
                </nav>
            </div>
            <div class="col-xs-12 p-0 d-block fixed-top d-md-none">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-9 col-xs-12" id="isi">
                isi
            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</html>