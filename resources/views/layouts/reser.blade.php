<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.4.7/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar" style="background-color: black">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">{{env('APP_NAME')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                </button>
                <!-- D:\xampp\htdocs\IMPAL_Gangcrew\public\image\bg_1.jpg -->
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{url()->current() == route('home') ? 'active' : ''}}"><a href="{{route('home')}}" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                        <li class="nav-item {{url()->current() == route('room') ? 'active' : ''}}"><a class="nav-link" href="{{route('room')}}"><i class="far fa-building"></i> Rooms</a></li>
                        <li class="nav-item {{url()->current() == route('dining') ? 'active' : ''}}"><a href="{{route('dining')}}" class="nav-link"><i class="fas fa-utensils"></i> Dining &amp; Bar</a></li>
                        <li class="nav-item {{url()->current() == route('reserve') ? 'active' : ''}}"><a href="{{ route('reserve') }}" class="nav-link"><i class="fas fa-address-book"></i> Booking</a></li>
                        @guest
                        <li class="nav-item {{url()->current() == route('login') ? 'active' : ''}}"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i> {{ __('Login') }}</a></li>
                        <li class="nav-item {{url()->current() == route('register') ? 'active' : ''}}"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')

            <footer class="ftco-footer ftco-bg-dark ftco-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Cozy</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Opening Hours</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
                                    <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Contact Information</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                                    <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                                    <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                                    <li><a href="#" class="py-2 d-block">email@email.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Newsletter</h2>
                                <p>Far far away, behind the word mountains, far from the countries.</p>
                                <form action="#" class="subscribe-form">
                                    <div class="form-group">
                                        <span class="icon icon-paper-plane"></span>
                                        <input type="text" class="form-control" placeholder="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
        function scDown(){
            $('html, body').animate({
                scrollTop: $("#downhere").offset().top
            }, 1600);
        } 
    </script>
</body>
</html>
