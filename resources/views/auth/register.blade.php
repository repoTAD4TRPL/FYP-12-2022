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
                <form action="{{ route('register-post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <h4>Daftar</h4>
                        </div>
                        <div class="col-6 text-end">
                            <p>Sudah memiliki akun? <a href="{{ route('login') }}" style="text-decoration: none;">Login</a></p>
                        </div>
                    </div>
                    <div class="my-4">
                        <input name="username" placeholder="Username" type="text" class="form-control" id="input_email">
                    </div>
                    <div class="my-4">
                        <input name="username" placeholder="Username" type="text" class="form-control" id="input_email">
                    </div>
                    <div class="my-4">
                        <div class="row">
                            <div class="w-50">
                                <select name="ressort" class="form-control" id="resort">
                                    @foreach ($ressorts as $ressort)
                                        <option value="{{ $ressort->id }}">{{ $ressort->nama_resort }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-50">
                                <select name="gereja" class="form-control" id="">
                                    @foreach ($gerejas as $gereja)
                                        @if ($gereja->resort_id != 0)
                                            <option value="">{{ $gereja->nama_gereja }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <input name="email" placeholder="Email/No. Telepon" type="email" class="form-control" id="input_email">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis-kelamin" value="Laki-laki">
                                <label class="form-check-label" for="jenis-kelamin">
                                Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis-kelamin" value="Perempuan">
                                <label class="form-check-label" for="jenis-kelamin">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <input name="password" placeholder="Password" type="password" class="form-control" id="input_password" >
                    </div>

                    <div class="my-4">
                        <input name="password_confirmation" placeholder="Konfirmasi password" type="password" class="form-control" id="input_password" >
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-success" style="width: 100%">Daftar</button>
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
