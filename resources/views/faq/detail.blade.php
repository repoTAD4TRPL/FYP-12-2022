<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HKBP Store</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/elegant-icons.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ URL::asset('img/logo.png') }}" alt=""></a>
        </div>

        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Indonesia</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Indonesia</a></li>
                    <li><a href="#">Batak</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href=""  class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                    @if (auth()->check())
                       {{ auth()->user()->username }}
                    @else
                        Login
                    @endif
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                    <li> <a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/product">Belanja</a></li>
                {{-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li> --}}
                <li><a href="">Kontak</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        {{-- <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> @colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div> --}}
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-facebook"></i> @hkbpstore</li>
                                <li><i class="fa fa-instagram"></i> @hkbpstoreindo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#">Notifikasi</a>
                                <a href="#">Bantuan</a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Indonesia</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Indonesia</a></li>
                                    <li><a href="#">Batak</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                @if (auth()->check())
                                    <a href=""  class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
                                @else
                                    <a href="{{route('login')}}" > <i class="fa fa-user"></i> Login</a>
                                @endif
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <main>
        <section>
            <div class="container">
                <div class="row my-3 text-center">
                    <div class="col-12">
                        <h3>Pusat Bantuan</h3>
                        <div class="blog__sidebar__search my-3" style="max-width:700px; margin:auto;">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer Section Begin -->
    <footer class="footer p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 text-center">
                    <h5>Apakah anda memiliki pertanyaan lain?</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="box bg-white" style="  margin: auto;  width: 300px;padding: 15px 30px;">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-envelope-o"  style="font-size:20px"></i>
                            </div>
                            <div class="col-10">
                                <div class="h5">Email</div>
                                <a href="">hkbpstore@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box bg-white" style="  margin: auto;  width: 300px;padding: 15px 30px;">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-phone"  style="font-size:20px"></i>
                            </div>
                            <div class="col-10">
                                <div class="h5">Telepon</div>
                                <a href="">081283702784</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <div class="chat" style="display: none" id="chat">
        <div class="chat-header">
            <div class="row">
                <div class="col-10">
                    <h5>Mareli Shoes</h5>
                    <span>Mareli Heels Sendal Wanita Ukuran 38</span>
                </div>
                <div class="col-2">
                    <button class="close-button" onclick="closeChat()">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="chat-body p-2">
            <div class="row text-center">
                <div class="col-12">
                    <span class="time">{{ now()->format('d M Y') }}</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-2">
                    <img width="30px;" height="30px;" src="{{ asset('storage/img/profile/profile.png') }}" alt="">
                </div>
                <div class="col-10">
                    <h5> Lamsiharss . 21:00 PM </h5>
                    <p style="font-size: 12px">Hallo</p>
                </div>
            </div>
        </div>
        <div class="chat-form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan pesan anda disini.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/jquery-3.3.1.min.js'); }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js'); }}"></script>
    <script src="{{ URL::asset('js/jquery.nice-select.min.js'); }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js'); }}"></script>
    <script src="{{ URL::asset('js/jquery.slicknav.js'); }}"></script>
    <script src="{{ URL::asset('js/mixitup.min.js'); }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js'); }}"></script>
    <script src="{{ URL::asset('js/main.js'); }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

</body>

</html>

