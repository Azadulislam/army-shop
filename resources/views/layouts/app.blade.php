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
    <div id="app" class="overflow-hidden">
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
        <header class="py-3 announcement">
            <div class="container">
                <p class="mb-0 text-center text-white fs-5" >15% off for Hari Merdeka. <a class="text-white"
                                                                                          href="#">*Details</a></p>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-light">
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">MAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>

                    </ul>
                </div>
                <div class="grow">
                    <div class="">
                        <a class="navbar-brand d-inline-block"  style="width: 80px; height: 50px" href="{{ route('home') }}">
                            <img class="w-100 h-100" src="{{ asset('images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <ul class="navbar-nav m-2 p-0 mb-lg-0 d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#"><i class="fa-regular fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a onclick="cartToggle(event)" class="nav-link px-2" href="#"><i class="fa-solid fa-cart-plus"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('help') }}"><i class="fa-regular fa-circle-question"></i></a>
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
        <section class="sign-up" id="sign_up">
            <div class="container pt-4 pb-5">
                <div class="shop-kids-text text-center pb-4">
                    <h1 class="section-header">
                        Want To be the first to know?
                    </h1>
                    <p class="mb-0 fs-5 col-lg-6 col-md-8 col-12 mx-auto">Join our email list and be the first to know about new limited edition products, material innovations, and lots of other fun updates.</p>
                    <div class="py-3">
                        <form action="#" class="subscribe-form col-lg-7 col-md-8 col-12 mx-auto">
                            <input class="subscribe-input me-3" type="email" name="" placeholder="Enter Your Email Address">
                            <button class="primary-btn dark-btn d-inline-block">Sign Up</button>
                        </form>
                    </div>
                    <p class="mb-0 fs-6 col-lg-6 col-md-8 col-12 mx-auto">Note: You can opt-out at any time.</p>
                </div>
            </div>
        </section>
        {{--Sign Up End--}}
        {{--Footer start --}}
        <footer class="footer py-5">
            <div class="container">
                <div class="row pb-4">
                    <div class="col-md-3">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Help</h3>
                        <ul class="Footer__link-list"><li class="Footer__link-list-item">
                                <a class="Footer__link" href="tel:18889638944">03 4252 5555</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="sms:18142519966">012 272 3722 (Whatsapp)</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="mailto:help@allbirds.com">help@salingerti.com.my</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Returns/Exchanges</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">FAQ/Contact Us</a>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Shop</h3>
                        <ul class="Footer__link-list"><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Men's Clothes</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Women's Clothes</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Men's Accessories</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Women's Accessories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Company</h3>
                        <ul class="Footer__link-list">
                            <li class="Footer__link-list-item">
                                <a class="Footer__link" href="https://stores.allbirds.com">Company Profile</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Board Of Directors</a>
                            </li><li class="Footer__link-list-item">
                                <a class="Footer__link" href="#">Management</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-3 d-none">
                        <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Follow the Flock</h3>
                        <p class="Footer__social-icons-description Typography--paragraph">Exclusive offers, a heads up on new things. Oh, we have cute sheep, too. #weareallbirds</p>
                        <div>
                            <a href="#"><i class="fa-reg"></i></a>
                        </div>
                    </div>
                    {{--                <div class="col-md-3 d-none">--}}
                    {{--                    <img src="//cdn.allbirds.com/image/upload/f_auto,q_auto/cms/1X4EOQF1JJOjMbo48vDUzB/c249da5825f9ae39f1f53bdb90d65285/icon-b-corp.svg" alt="">--}}
                    {{--                </div>--}}
                    <div class="col-md-4">
                        <ul class="Footer__country-flags-list">
                            <li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="United States" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" alt="US flag" src="{{ asset('assets/flag/malaysia.png') }}">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="New Zealand" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/22gqFXi2QPoT2IhEpBuzOi/d01a77d603e94a10b8a690deded124f7/flag-nz.svg" alt="Shop Flag - NZ" src="//cdn.allbirds.com/image/upload/q_auto/cms/22gqFXi2QPoT2IhEpBuzOi/d01a77d603e94a10b8a690deded124f7/flag-nz.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="Australia" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/6FnrOphj9NsjD38uREtsBn/cbf3c42e92a6c0628da4462b04e92e2c/flag-au.svg" alt="Shop Flag - AU" src="//cdn.allbirds.com/image/upload/q_auto/cms/6FnrOphj9NsjD38uREtsBn/cbf3c42e92a6c0628da4462b04e92e2c/flag-au.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="Canada" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/mpzswQHoLPhzgFkXpcZ7P/eba356c7c7929352d5d3eea6999f5ad3/flag-ca.svg" alt="Shop Flag - CA" src="//cdn.allbirds.com/image/upload/q_auto/cms/mpzswQHoLPhzgFkXpcZ7P/eba356c7c7929352d5d3eea6999f5ad3/flag-ca.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="UK" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg" alt="Shop Flag - UK" src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="China" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/2bpMfDa3leuCSpX1lLXKvB/19c74fd77f850e29497ad82d91e83292/flag-cn.svg" alt="Shop Flag - China" src="//cdn.allbirds.com/image/upload/q_auto/cms/2bpMfDa3leuCSpX1lLXKvB/19c74fd77f850e29497ad82d91e83292/flag-cn.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="EU" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/5DEtULZUsBHTJp8aXcaOIc/c9d3ff14bde3bf45235f906dfb63f649/method-draw-image.svg" alt="EU Flag" src="//cdn.allbirds.com/image/upload/q_auto/cms/5DEtULZUsBHTJp8aXcaOIc/c9d3ff14bde3bf45235f906dfb63f649/method-draw-image.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="JP" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/3TWBjQxibzqkiXua4hrmCu/1730ec7122e70b26bd29d972733a8190/Japan-Flag.svg" alt="Japan flag icon" src="//cdn.allbirds.com/image/upload/q_auto/cms/3TWBjQxibzqkiXua4hrmCu/1730ec7122e70b26bd29d972733a8190/Japan-Flag.svg">
                                </a>
                            </li><li class="Footer__country-flags-list-item">
                                <a class="Footer__country-flag-link" aria-label="KR" href="#">
                                    <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/lqp21Rk7GI8HTImpSTOip/cdb1a8e18b337c27e91c18b82dd93ddf/South-Korea-Flag.svg" alt="South Korea flag icon" src="//cdn.allbirds.com/image/upload/q_auto/cms/lqp21Rk7GI8HTImpSTOip/cdb1a8e18b337c27e91c18b82dd93ddf/South-Korea-Flag.svg">
                                </a>
                            </li></ul>
                    </div>
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
