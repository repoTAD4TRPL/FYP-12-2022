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
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <h4>Daftar</h4>
                        </div>
                        <div class="col-6 text-end">
                            <p>Sudah memiliki akun? <a href="/login" style="text-decoration: none;">Login</a></p>
                        </div>
                    </div>
                    <div class="my-4">
                        <input placeholder="Email/No. Telepon" type="email" class="form-control" id="input_email">
                    </div>
                    <div class="my-4">
                        <div class="contaner-fluid">
                            <div class="row">
                                <div class="col-8">
                                    <input placeholder="Kode verifikasi" type="email" class="form-control" id="input_email">
                                </div>
                                <div class="col-4">
                                    <a href="" style="width: 100%; color:white;" class="btn btn-info">Kirim kode</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <input placeholder="Password" type="password" class="form-control" id="input_password" >
                    </div>
                    <div class="my-2">
                        <a href="/dashboard" class="btn btn-success" style="width: 100%">Daftar</a>
                    </div>
                    <div class="">
                    </div>
                    <div class="text-center">
                        <p>Atau</p>
                    </div>
                    <div class="my-2 text-center">
                        <a href="" class="btn btn-labeled btn-light" style="width: 100%"><img src="img/icon/google.png" width="20px" height="20px" class="me-2"> Daftar dengan Google</a>
                    </div>
                    <div class="my-2 text-center">
                        <a href="" class="btn btn-labeled btn-primary" style="width:   100%"><img src="img/icon/facebook.png" width="20px" height="20px" class="me-2"> Daftar dengan Facebook</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
