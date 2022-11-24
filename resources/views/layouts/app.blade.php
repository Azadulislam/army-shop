<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Malaysian Army Clothing and much more ') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Scripts -->
    @vite([ 'resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app" class="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-none">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo">
                    <h1>Logo</h1>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <header class="py-2 announcement">
            <div class="container">
                <p class="mb-0 text-center text-white fs-6" >15% off for Hari Merdeka. <a class="text-white"
                                                                                          href="#">*Details</a></p>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link active" aria-current="page" href="#">MAN</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="#">WOMEN</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="#">Kids</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="#">Sale</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="#">Gifts</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
                {{--            </div>--}}
                <div class="collapse navbar-collapse flex-none" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company') }}">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">Order Now</a>
                        </li>

                    </ul>
                </div>
                <div class="text-center flex-1">
                    <a class="navbar-brand d-inline-block"  style="width: 80px; height: 50px" href="{{ route('home') }}">
                        <img class="w-100 h-100" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>

                <ul class="navbar-nav m-2 p-0 mb-lg-0 d-flex align-items-center flex-row">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link px-2" href="#"><i class="fa-regular fa-user"></i></a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a onclick="cartToggle(event)" class="nav-link px-2 text-xl" href="#"><i class="bi bi-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 text-xl" href="{{ route('help') }}"><i class="fa-regular fa-circle-question"></i></a>
                    </li>
                </ul>
                <div class="language-change dropdown dropstart m-1 p-0 mb-lg-0">
                    <a class=" text-decorateion-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="country-flag" src="{{ asset('assets/flag/us.svg') }}" alt="">
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#"><img class="country-flag" src="{{ asset('assets/flag/us.svg') }}" alt="">English</a></li>
                        <li><a class="dropdown-item" href="#"><img class="country-flag" src="{{ asset('assets/flag/my.svg') }}" alt="">Melayu</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="">
            @yield('content')
        </main>
        {{--Sing Up Start--}}

        {{--Sign Up End--}}
        {{--Footer start --}}
        <footer class="footer py-5">
            <div class="container">
                <div class="row pb-4">

                    <div class="col-md-4">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Help</h3>
                        <ul class="Footer__link-list"><li class="Footer__link-list-item">
                                <a class="Footer__link" href="tel:18889638944">03 4252 5555</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="sms:18142519966">012 272 3722 (Whatsapp)</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="mailto:help@allbirds.com">help@salingerti.com.my</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Company</h3>
                        <ul class="Footer__link-list">
                            <li class="Footer__link-list-item">
                                <a class="Footer__link" href="{{ route('company') }}">Company Profile</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Board Of Directors</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Management</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="Footer__country-flags-list">
                            <li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="United States" href="#">
                                    <img class="Footer__country-flag Lazy--loaded h-[23px] w-100" alt="US flag" src="{{ asset('assets/flag/malaysia.png') }}">
                                </a>
                            </li>
                            <li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="UK" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg" alt="Shop Flag - UK" src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </footer>
        {{--Footer end --}}
    </div>
    <div class="body-overly d-none"></div>
    <div class="shopping_cart fixed inset-y-0 bg-slate-50 w-[450px] p-5 z-10">
        <div class="shopping-cart-content">
            <div class="cart-header text-center">
                <div class="cart-icon text-center mb-3 text-4xl"><i class="bi bi-cart"></i></div>
                <p class="text-center"></p>
                <hr class="h-1 bg-slate-400 border-0">
                <button onclick="cartToggle(event)" class="cart-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cart-body p-4">
                <h1 class="text-lg mb-3 font-semibold text-center text-slate-600">Your cart is empty</h1>
                <div class="d-flex flex-column text-center">
                    <a class="cart-btn" href="#">Shp Men's</a>
                    <a class="cart-btn" href="#">Shp Women's</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("assets/js/jquery-3.6.1.min.js") }}"></script>
    <script src="{{ asset("assets/OwlCarousel/dist/owl.carousel.js") }}"></script>
    @yield('script')
    <script>
        function cartToggle(e){
            e.preventDefault();
            let shoppingCart = $('.shopping_cart');
            $('.body-overly').toggleClass('d-none')
            shoppingCart.toggleClass('active')
        }
    </script>
</body>
</html>
