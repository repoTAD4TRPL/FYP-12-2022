<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HKBP Store</title>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">

    function openChat(){
        document.getElementById('chat').style.display = 'block';
    }
    function closeChat(){
        document.getElementById('chat').style.display = 'none';
    }
    $(function() {
        $(".chartContainer").CanvasJSChart({
            title: {
                text: "Monthly Rainfall in Columbus - 1996"
            },
            axisY: {
                title: "Rainfall in mm",
                includeZero: false
            },
            axisX: {
                interval: 1
            },
            data: [
            {
                type: "line", //try changing to column, area
                toolTipContent: "{label}: {y} mm",
                dataPoints: [
                    { label: "Jan",  y: 5.28 },
                    { label: "Feb",  y: 3.83 },
                    { label: "March",y: 6.55 },
                    { label: "April",y: 4.81 },
                    { label: "May",  y: 2.37 },
                    { label: "June", y: 2.33 },
                    { label: "July", y: 3.06 },
                    { label: "Aug",  y: 2.94 },
                    { label: "Sep",  y: 5.41 },
                    { label: "Oct",  y: 2.17 },
                    { label: "Nov",  y: 2.17 },
                    { label: "Dec",  y: 2.80 }
                ]
            }
            ]
        });
    });
    </script>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/inline/ckeditor.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ URL::asset('img/logo.png') }}" alt=""></a>
        </div>
        {{-- <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div> --}}
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
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('dashboard') }}"><img src="{{ URL::asset('img/logo.png') }}" height="50px" width="200px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 py-4">
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <main  style="" class="">

        <section class="profil-section pb-3 store" style="background: #F5F5F5">
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-12">
                        <p class="mb-0 mt-3">Profile > Toko Saya</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 px-2" style="height:100%">
                        <div class="sidebar bg-white py-3">
                            <div class="sidebar-menu ">
                                <a href="{{ route('product') }}" >Produk Saya</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('store.order') }}">Pesanan </a>
                                    <a class="dropdown-item" href="{{ route('order.cancelled') }}">Pembatalan</a>
                                </div>
                            </div>
                            <div class="sidebar-menu ">
                                <a href="{{ route('store.auction') }}" >Kelola Lelang</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Metode Pembayaran</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('payment.saldo') }}">Saldo Penjual </a>
                                    <a class="dropdown-item" href="{{ route('payment.setting') }}">Pengaturan Rekening</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('shipment') }}">Pengiriman Saya</a>
                                    <a class="dropdown-item" href="{{ route('shipment.setting') }}">Pengaturan Pengiriman</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="{{ route('store.monitoring') }}">Analisis Pembeli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 px-2">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            {{-- <a href="./index.html"><img src="{{ URL::asset('img/logo.png') }}" alt=""></a> --}}
                        </div>
                        <ul>
                            <li>Alamat: Laguboti, Toba</li>
                            <li>Phone: +62 822-1323-9041</li>
                            <li>Email: hkbpstore21@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Link</h6>
                        <ul>
                            <li><a href="#">Tentang kami</a></li>
                            <li><a href="#">Komunitas HKBP</a></li>
                            <li><a href="#">Registrasi Member</a></li>
                            <li><a href="#">Informasi Pengiriman</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Tim kami</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Layanan</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Testimoni</a></li>
                            <li><a href="#">Galery</a></li>
                            <li><a href="#">Tentang HKBP</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Ikuti kami</h6>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kelompok 12 TA 2022
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
        $(document).ready(function() {
            $('#table-without-top-controller').DataTable();
        } );


    </script>
<script>


    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['00.00', '06.00', '12.00', '18.00','20.00','22.00'],
            datasets: [{
                label: "Customer's activities ",
                data: [4, 7, 3, 5,9,6],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>


</body>

</html>

