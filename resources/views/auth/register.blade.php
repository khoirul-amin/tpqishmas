<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TPQ Ishlahul Masalik</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
        }

        .form-control {
            line-height: 2;
        }

        .bg-custom {
            background-color: #6C63FF;
        }

        .btn-custom {
            background-color: #3e3d56;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #33313f;
            color: #fff;
        }

        label {
            color: #fff;
        }

        a,
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        @media(max-width: 932px) {
            .display-none {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="row m-0 h-100">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src="{{asset('images/web/login.svg')}}" class="w-100">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <form class="w-75" action="/register" method="POST">
                @csrf
                @if ($errors->any())
                    <div id="error" class="alert alert-danger" role="alert">
                        <button type="button" onclick="closeModal()" class="btn-close mr-3" aria-label="Close"></button>
                        {{$errors->first()}}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nama Lengkap</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="inputName" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control" id="inputEmail" placeholder="email" required>
                </div>
                <div class="mb-3">
                    <label for="inputPhone" class="form-label">No Telpon</label>
                    <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="inputPhone" placeholder="No. Telpon" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Saya bukan robot
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-custom btn-lg btn-block mt-3">Register</button>
            </form>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script>
        function closeModal(){
            document.getElementById('error').remove();
        }
    </script>
</html>