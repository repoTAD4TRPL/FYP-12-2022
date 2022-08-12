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
                <h4 class="my-3">Registrasi Toko</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="login_form mb-5">
                    <form action="">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control mb-4" placeholder="Username">
                        </div>
                        <label for="store-name" class="form-label">Nama Toko</label>
                        <div class="input-group">
                            <input type="text" class="form-control mb-4" placeholder="Nama Toko">
                        </div>
                        <label for="store-name" class="form-label">NIK</label>
                        <div class="input-group">
                            <input type="text" class="form-control mb-4" placeholder="NIK">
                        </div>
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control mb-4" placeholder="Email">
                        </div>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control mb-4" placeholder="Password">
                        </div>
                        <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control mb-4" placeholder="Konfirmasi password">
                        </div>
                        <a href="{{ route('login')}}" class="btn btn-md w-100 mb-4" style="background-color: #25AF22; color:white">Register</a>
                        {{-- <p class="mb-4">Sudah punya akun? <a href="#">Daftar sebagai penjual</a></p> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
