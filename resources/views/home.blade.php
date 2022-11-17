@extends('layouts.app')

    @section('content')
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">MAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WOMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gifts</a>
                    </li>
                </ul>
                <div class="">
                    <a class="navbar-brand d-inline-block"  style="width: 80px; height: 50px" href="#">
                        <img class="w-100 h-100" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">MAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Company</a>
                    </li>

                </ul>
            </div>
            <ul class="navbar-nav m-2 p-0 mb-lg-0 d-flex align-items-center flex-row">
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fa-regular fa-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fa-solid fa-cart-plus"></i></a>
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
    {{--    Banner Start--}}
    <section id="banner" class="home-banner" style="background-image: url('{{ asset('images/banner.png') }}')">
        <div class="container">
            <div class="banner-content d-flex justify-content-end flex-column h-100">
                <div class="banner-text ">
                    <h1 class="fs-1 fw-semibold mb-3">Celebrate Hari Merdeka with all proudness and jubilant.</h1>
                    <h5 class="text-base fw-semibold mb-4">Beautiful uniforms and accessories to choose from.</h5>
                </div>
                <div class="d-flex flex-start">
                    <a class="primary-btn white-btn me-4" href="#">Shop Men</a>
                    <a class="primary-btn white-btn" href="#">Shop Women</a>
                </div>
            </div>
        </div>
        <div class="banner-footer">
            <div class="container">
                <p class="mb-0 fs-6">
                    <span class="font-semibold mr-1">Find The Perfect Gift</span>
                    <span>Take Our Style Quiz to find the perfect pair.</span>
                    <a class="quiz-link" href="#">Take the Style Quiz</a>
                </p>
            </div>
        </div>
    </section>
    {{--Banner End--}}
    {{--best selling start--}}
    <section id="best_selling" class="home-best-selling">
        <div class="container">
            <h1 class="section-header">Our Best-Selling Gifts</h1>
            <ul class="nav nav-pills mb-3 border-bottom justify-content-center" id="pills-tab" role="tablist">
                <li class="" role="presentation">
                    <button class="tab-button text-uppercase" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#everyday" type="button" role="tab" aria-controls="pills-home" aria-selected="true">On Duty</button>
                </li>
                <li class="" role="presentation">
                    <button class="tab-button text-uppercase" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#running" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ceremonials</button>
                </li>
                <li class="" role="presentation">
                    <button class="tab-button text-uppercase" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#lounging" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Casual And Sports</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="everyday" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel best-selling" id="best_selling_carousel">
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="{{ route('shop') }}">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Combat
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Attire
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Royal Events
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Boot
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Great Runner
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Speedy Shoes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="running" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel best-selling" id="best_selling_carousel">
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="{{ route('shop') }}">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Combat
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Attire
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Royal Events
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Boot
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Great Runner
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Speedy Shoes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="lounging" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel best-selling" id="best_selling_carousel">
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="{{ route('shop') }}">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Combat
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Attire
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Royal Events
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Cozy Boot
                                </div>
                            </div>
                        </div>
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom fs-3 fw-semibold">
                                    Great Runner
                                </div>
                                <div class="product-category fs-5 d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare fa-2x"></i></span>Speedy Shoes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Best Selling End--}}
    <section class="shoos-image">
        <img src="{{ asset('images/hero-two.avif') }}" alt="">
    </section>

    {{--Shop Now Start--}}
    <section class="shop-now" id="shop_now">
        <div class="container pt-3 pb-5">
            <div class="shop-now-text text-center">
                <h1 class="section-header">
                    All Types of army and police shoes to chose from
                </h1>
                <p class="mb-0 fs-5">High quality shoes designed for Malaysian weather as well </p>
                <p class="mb-4 fs-5"> as for winter and summer.</p>
                <a class="primary-btn dark-btn shop-now-btn mt-2 d-inline-block" href="#">Shop Now</a>
            </div>
        </div>
    </section>
    {{--Shop Now End--}}
    {{--New Arrivals Start--}}
    <section class="new-arrivals">
        <div class="container pt-3 pb-5">
            <div class="new-arrivals-text">
                <h1 class="section-header text-start">
                    New Arrivals
                </h1>
                <div class="owl-carousel" id="new_arrivals">
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Police Boot
                            </div>
                            <div class="product-category fs-5">
                                Made using nano technology
                            </div>
                        </div>
                    </div>
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Army Boot
                            </div>
                            <div class="product-category fs-5">
                                Made of Turkey soft material
                            </div>
                        </div>
                    </div>
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Army uniform
                            </div>
                            <div class="product-category fs-5">
                                Made of fine material
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--New Arrivals End--}}

{{--    <section class="shoos-image">--}}
{{--        <img src="{{ asset('images/hero-two.avif') }}" alt="">--}}
{{--    </section>--}}


    {{--Shop Kids Start--}}
    <section class="shop-kids d-none" id="shop_kids">
        <div class="container pt-3 pb-5">
            <div class="shop-kids-text text-center">
                <h1 class="section-header">
                    Great Gifts Come In Small Packages
                </h1>
                <p class="mb-0 fs-5">The only thing cuter than the little ones dressed in their holiday best? Putting a</p>
                <p class="mb-4 fs-5"> bow on it with some Small birds, of course.</p>
                <div class="d-flex justify-content-center">
                    <a class="primary-btn dark-btn shop-now-btn mt-2 d-inline-block me-4" href="#">Shop Little Kids</a>
                    <a class="primary-btn dark-btn shop-now-btn mt-2 d-inline-block" href="#">Shop Big Kids</a>
                </div>
            </div>
        </div>
    </section>
    {{--Shop Kids End--}}

    {{--Collection Start--}}
{{--    <section class="collections d-none" id="collections_container">--}}
{{--        <div class="container pt-3 pb-5">--}}
{{--            <div class="collection-text">--}}
{{--                <h1 class="section-header text-start">--}}
{{--                    Shop The Collections--}}
{{--                </h1>--}}
{{--                <div class="owl-carousel" id="collections">--}}
{{--                    <div class="best-product shadow-lg">--}}
{{--                        <div class="product-image">--}}
{{--                            <img src="{{ asset('images/product.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="details px-4 py-3">--}}
{{--                            <div class="product-name fs-3 fw-semibold">--}}
{{--                                The Fluff Collection--}}
{{--                            </div>--}}
{{--                            <div class="product-category text-start fs-5">--}}
{{--                                Fluff options from head to toe perfect for wearing together, separate, or wrapping up for someone on your nice list.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="best-product shadow-lg">--}}
{{--                        <div class="product-image">--}}
{{--                            <img src="{{ asset('images/product.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="details px-4 py-3">--}}
{{--                            <div class="product-name fs-3 fw-semibold">--}}
{{--                                The Fluff Collection--}}
{{--                            </div>--}}
{{--                            <div class="product-category text-start fs-5">--}}
{{--                                Fluff options from head to toe perfect for wearing together, separate, or wrapping up for someone on your nice list.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="best-product shadow-lg">--}}
{{--                        <div class="product-image">--}}
{{--                            <img src="{{ asset('images/product.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="details px-4 py-3">--}}
{{--                            <div class="product-name fs-3 fw-semibold">--}}
{{--                                The Fluff Collection--}}
{{--                            </div>--}}
{{--                            <div class="product-category text-start fs-5">--}}
{{--                                Fluff options from head to toe perfect for wearing together, separate, or wrapping up for someone on your nice list.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    {{--Collections End--}}
{{--    <section class="shoos-image">--}}
{{--        <img src="{{ asset('images/herro-three.avif') }}" alt="">--}}
{{--    </section>--}}


    {{--Sustainable product q Start--}}
    <section class="sustainable d-none" id="shop_now">
        <div class="container pt-4 pb-5">
            <div class="shop-kids-text text-center">
                <h1 class="section-header">
                    Can Sustainable Shoes Save The Planet?
                </h1>
                <p class="mb-0 fs-5 col-lg-6 col-md-8 col-12 mx-auto">We think it’s a good place to start. Explore our approach to sustainable footwear, sustainable apparel and reducing our environmental impact. Check out our progress so far, and our bold list of commitments for 2025.</p>
                <div class="d-flex justify-content-center pb-3">
                    <a class="primary-btn dark-btn shop-now-btn mt-2 d-inline-block me-4" href="#">Our Sustainable Practices</a>
                </div>
            </div>
        </div>
    </section>
    {{--Sustainable product End--}}

    {{--Sotries Start--}}
    <section class="stories" id="stories">
        <div class="container pt-3 pb-5">
            <div class="stories-text pb-4">
                <h1 class="section-header text-start">
                    Stories
                </h1>
                <div class="owl-carousel" id="stories_carousel">
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Men's Wool Dasher Fluff
                            </div>
                            <div class="product-category fs-5">
                                Limited Edition Color, Natural White
                            </div>
                        </div>
                    </div>
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Men's Wool Dasher Fluff
                            </div>
                            <div class="product-category fs-5">
                                Limited Edition Color, Natural White
                            </div>
                        </div>
                    </div>
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Men's Wool Dasher Fluff
                            </div>
                            <div class="product-category fs-5">
                                Limited Edition Color, Natural White
                            </div>
                        </div>
                    </div>
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                Men's Wool Dasher Fluff
                            </div>
                            <div class="product-category fs-5">
                                Limited Edition Color, Natural White
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--Stories End--}}


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
                            <a class="Footer__link" href="/pages/returns-exchanges">Returns/Exchanges</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/help">FAQ/Contact Us</a>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Shop</h3>
                    <ul class="Footer__link-list"><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/collections/mens">Men's Shoes</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/collections/womens">Women's Shoes</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/collections/mens-apparel">Men's Apparel</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/collections/womens-apparel">Women's Apparel</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/collections/trino-socks">Accessories</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="https://www.allbirds.com/pages/refer-a-friend" target="_blank" rel="noopener noreferrer">Refer a Friend</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Company</h3>
                    <ul class="Footer__link-list"><li class="Footer__link-list-item">
                            <a class="Footer__link" href="https://stores.allbirds.com">Our Stores</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/our-story">Our Story</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/our-materials-wool">Our Materials</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/product-testing">Product Testing</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/affiliates">Affiliates</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="https://www.allbirds.com/pages/bulk-ordering">Bulk Orders </a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/careers">Careers</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/press">Press</a>
                        </li><li class="Footer__link-list-item">
                            <a class="Footer__link" href="/pages/community-offers">Community Offers</a>
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
                            <a class="Footer__country-flag-link" aria-label="United States" href="https://www.allbirds.com/">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/3ohqY3WWyehlkYpVi815p9/6f7fbf2f1e4a08abc8da4788a95c2376/flag-us.svg" alt="US flag" src="//cdn.allbirds.com/image/upload/q_auto/cms/3ohqY3WWyehlkYpVi815p9/6f7fbf2f1e4a08abc8da4788a95c2376/flag-us.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="New Zealand" href="https://www.allbirds.co.nz">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/22gqFXi2QPoT2IhEpBuzOi/d01a77d603e94a10b8a690deded124f7/flag-nz.svg" alt="Shop Flag - NZ" src="//cdn.allbirds.com/image/upload/q_auto/cms/22gqFXi2QPoT2IhEpBuzOi/d01a77d603e94a10b8a690deded124f7/flag-nz.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="Australia" href="https://www.allbirds.com.au">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/6FnrOphj9NsjD38uREtsBn/cbf3c42e92a6c0628da4462b04e92e2c/flag-au.svg" alt="Shop Flag - AU" src="//cdn.allbirds.com/image/upload/q_auto/cms/6FnrOphj9NsjD38uREtsBn/cbf3c42e92a6c0628da4462b04e92e2c/flag-au.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="Canada" href="https://www.allbirds.ca">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/mpzswQHoLPhzgFkXpcZ7P/eba356c7c7929352d5d3eea6999f5ad3/flag-ca.svg" alt="Shop Flag - CA" src="//cdn.allbirds.com/image/upload/q_auto/cms/mpzswQHoLPhzgFkXpcZ7P/eba356c7c7929352d5d3eea6999f5ad3/flag-ca.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="UK" href="https://www.allbirds.co.uk">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg" alt="Shop Flag - UK" src="//cdn.allbirds.com/image/upload/q_auto/cms/5OVl6dmwlwOJPrg5F3Ot1s/e9679772ddd64de49cd96cbd4a819743/flag-uk.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="China" href="https://www.allbirds.cn">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/2bpMfDa3leuCSpX1lLXKvB/19c74fd77f850e29497ad82d91e83292/flag-cn.svg" alt="Shop Flag - China" src="//cdn.allbirds.com/image/upload/q_auto/cms/2bpMfDa3leuCSpX1lLXKvB/19c74fd77f850e29497ad82d91e83292/flag-cn.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="EU" href="https://www.allbirds.eu">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/5DEtULZUsBHTJp8aXcaOIc/c9d3ff14bde3bf45235f906dfb63f649/method-draw-image.svg" alt="EU Flag" src="//cdn.allbirds.com/image/upload/q_auto/cms/5DEtULZUsBHTJp8aXcaOIc/c9d3ff14bde3bf45235f906dfb63f649/method-draw-image.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="JP" href="https://www.allbirds.jp">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/3TWBjQxibzqkiXua4hrmCu/1730ec7122e70b26bd29d972733a8190/Japan-Flag.svg" alt="Japan flag icon" src="//cdn.allbirds.com/image/upload/q_auto/cms/3TWBjQxibzqkiXua4hrmCu/1730ec7122e70b26bd29d972733a8190/Japan-Flag.svg">
                            </a>
                        </li><li class="Footer__country-flags-list-item">
                            <a class="Footer__country-flag-link" aria-label="KR" href="https://www.allbirds.co.kr">
                                <img class="Footer__country-flag Lazy--loaded" data-src="//cdn.allbirds.com/image/upload/q_auto/cms/lqp21Rk7GI8HTImpSTOip/cdb1a8e18b337c27e91c18b82dd93ddf/South-Korea-Flag.svg" alt="South Korea flag icon" src="//cdn.allbirds.com/image/upload/q_auto/cms/lqp21Rk7GI8HTImpSTOip/cdb1a8e18b337c27e91c18b82dd93ddf/South-Korea-Flag.svg">
                            </a>
                        </li></ul>
                </div>
            </div>
        </div>
    </footer>
    {{--Footer end --}}
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(".best-selling").owlCarousel({
                loop:false,
                margin:25,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });
            $("#new_arrivals").owlCarousel({
                loop:false,
                margin:25,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });
            $("#collections").owlCarousel({
                loop:false,
                margin:25,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });
            $("#stories_carousel").owlCarousel({
                loop:false,
                margin:25,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });
        });
    </script>
@endsection
