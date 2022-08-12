<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="mx-auto my-4" style="width: 80%; height:80%; background-image: url('/img/welcome.png'); background-repeat: no-repeat; background-position: center;"></div>
            </div>
            <div class="col-md-6 px-5">
                <form action="{{ route('login-post') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <h4>Masuk</h4>
                        </div>
                        <div class="col-6 text-end">
                            <p>Belum punya akun? <a href="/register" style="text-decoration: none;">Daftar</a></p>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="exampleInputEmail" class="form-label">Email / No.Telepon</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="my-2">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="my-2 text-end">
                        <a href="#" style="text-decoration:none;color:black">Lupa Password</a>
                    </div>
                    <div class="mb-1">
                        <button type="submit" class="btn btn-success" style="width: 100%">Masuk</a>
                    </div>
                    <div class="">
                    </div>
                    <div class="my-2 text-center">
                        <p>Atau</p>
                    </div>
                    <div class="my-2 text-center">
                        <a href="" class="btn btn-labeled btn-light" style="width: 100%"><img src="img/icon/google.png" width="20px" height="20px" class="me-2"> Masuk dengan Google</a>
                    </div>
                    <div class="my-2 text-center">
                        <a href="" class="btn btn-labeled btn-primary" style="width:   100%"><img src="img/icon/facebook.png" width="20px" height="20px" class="me-2"> Masuk dengan Facebook</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="background-image: url({{ asset('img/bg/bg.jpg') }}); background-size: 100px 120px">
            <hr>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
                <h5>Ikuti kami</h5>
                <ul style="list-style: none;padding:5px">
                    <li><span class="btn-label me-3"><i class="fa fa-facebook" ></i></span> Facebook</li>
                    <li><span class="btn-label me-3"><i class="fa fa-instagram" ></i></span>Instagram</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Whatsapp</h5>
                <ul style="list-style: none;padding:5px">
                    <li><span class="btn-label me-3"><i class="fa fa-whatsapp" ></i></span>0821-9311-3431</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Email</h5>
                <ul style="list-style: none;padding:5px">
                    <li><span class="btn-label me-3"><i class="fa fa-envelope" ></i></span>hkbpstore2022@gmail.com</li>
                </ul>
            </div>
            <div class="col-sm-2">

            </div>

        </div>
    </div>
</body>

</html>
