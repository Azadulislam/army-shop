@extends('layouts.app')

    @section('content')

    {{--    Banner Start--}}
    <section id="banner" class="home-banner banner-overly" style="background-image: url('{{ asset('images/banner.jpg') }}')">
        <div class="container-lg">
            <div class="banner-content d-flex justify-content-end flex-column h-100">
                <div class="banner-text ">
                    <h1 class="fs-1 fw-semibold mb-3">Celebrate Hari Merdeka with all proudness and jubilant.</h1>
                    <h5 class="text-base fw-semibold mb-4">Beautiful uniforms and accessories to choose from.</h5>
                </div>
{{--                <div class="d-flex flex-start">--}}
{{--                    <a class="primary-btn white-btn me-4" href="{{ route('products') }}?type=men">Shop Men</a>--}}
{{--                    <a class="primary-btn white-btn" href="#">Shop Women</a>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="banner-footer">
            <div class="container-lg">
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
    <section id="best_selling" class="home-best-selling overflow-hidden">
        <div class="container-lg">
            <h1 class="section-header mb-4">Our Best-Selling Gifts</h1>
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
                                    <span class="me-2 text-2xl"><i class="bi bi-clouds"></i></span>Cozy Attire
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
                                    <span class="me-2 text-2xl"><i class="bi bi-clouds"></i></span>Cozy Boot
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
                                    <span class="me-2 text-2xl"><i class="bi bi-clouds"></i></span>Speedy Shoes
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
        <img src="{{ asset('images/military.jpg') }}" alt="">
    </section>

    {{--Shop Now Start--}}
{{--    <section class="shop-now" id="shop_now">--}}
{{--        <div class="container pt-3 pb-5">--}}
{{--            <div class="shop-now-text text-center">--}}
{{--                <h1 class="section-header">--}}
{{--                    All Types of army and police shoes to chose from--}}
{{--                </h1>--}}
{{--                <p class="mb-0 fs-5">High quality shoes designed for Malaysian weather as well </p>--}}
{{--                <p class="mb-4 fs-5"> as for winter and summer.</p>--}}
{{--                <a class="primary-btn dark-btn shop-now-btn mt-2 d-inline-block" href="#">Shop Now</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    {{--Shop Now End--}}
    {{--New Arrivals Start--}}
    <section class="new-arrivals overflow-hidden">
        <div class="container-lg pt-3 pb-5">
            <div class="new-arrivals-text">
                <h1 class="section-header text-start mb-4">
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
        <div class="container-lg pt-3 pb-5">
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
        <div class="container-lg pt-4 pb-5">
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
    <section class="stories overflow-hidden" id="stories">
        <div class="container-lg pt-3 pb-5">
            <div class="stories-text pb-4">
                <h1 class="section-header text-start mb-4">
                    Success Stories
                </h1>
                <div class="owl-carousel" id="stories_carousel">
                    @if($successes->count() < 1)
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
                    @endif
                    @foreach($successes as $suc)
                    <div class="best-product shadow-lg">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div class="details px-4 py-3">
                            <div class="product-name fs-3 fw-semibold">
                                {{ substr($suc->web_ad_title, 0, 25) }}@if(strlen($suc->web_ad_title)> 25)...@endif
                            </div>
                            <div class="product-category fs-5 h-[3rem]">
                                {{ $suc->web_ad_sub_title }}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    {{--Stories End--}}
    @include('layouts.sign-up')
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
