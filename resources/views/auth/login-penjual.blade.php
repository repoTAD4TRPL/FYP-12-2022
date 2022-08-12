<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Penjual</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="background-color: #f7f7f7;">
    <div class="containter">
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="{{ asset('img/logo2.jpeg') }}" alt="">
                <h4 class="my-3">Login Penjual</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="login_form text-center">
                    <form action="">
                        <input type="email" class="form-control my-4" placeholder="Email/No. Telepon">
                        <input type="password" class="form-control mb-4" placeholder="Password">
                        <a href="{{ route('penjual.dashboard') }}" class="btn btn-md w-100 mb-4" style="background-color: #25AF22; color:white">Login</a>
                        <p class="mb-4">Belum punya akun? <a href="#">Daftar sebagai penjual</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
