<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
    crossorigin="anonymous" />
    <title>TPQ Ishlahul Masalik</title>
</head>
<body>
    <div class="container-fluid p-0 main-wrapper">
        <div class="row m-0 h-md-100 h-100">
            @include('template.left')
            @include('template.togle')
            <div class="col-md-9 col-xs-12 col-xl-9" id="isi">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</html>