@extends('layouts.app')

<header class="py-3 announcement">
    @section('content')
        <div class="container">
            <p class="mb-0 text-center text-white" >Buy One, Get One 15% Off. Full-priced footwear only. Use code: BIRD15 at checkout. <a class="text-white"
                                                                                                                                          href="#">*Details</a></p>
        </div>
</header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
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
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">MAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sustainability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ReRun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Stores</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section>
    <div class="container py-5">
        <h1 class="ts-5">Coming Soon</h1>
    </div>
</section>


{{--Sing Up Start--}}
<section class="sign-up" id="sign_up">
    <div class="container pt-4 pb-5">
        <div class="shop-kids-text text-center pb-4">
            <h1 class="section-header">
                Want First Dibs?
            </h1>
            <p class="mb-0 fs-5 col-lg-6 col-md-8 col-12 mx-auto">Join our email list and be the first to know about new limited edition products, material innovations, and lots of other fun updates.</p>
            <div class="py-3">
                <form action="#" class="subscribe-form col-lg-7 col-md-8 col-12 mx-auto">
                    <input class="subscribe-input me-3" type="email" name="" placeholder="Enter Your Email Address">
                    <button class="primary-btn dark-btn d-inline-block">Sign Up</button>
                </form>
            </div>
            <p class="mb-0 fs-6 col-lg-6 col-md-8 col-12 mx-auto">Note: You can opt-out at any time. See our Privacy Policy and Terms.</p>
        </div>
    </div>
</section>
{{--Sign Up End--}}
{{--Footer start --}}
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Help</h3>
                <ul class="Footer__link-list"><li class="Footer__link-list-item">
                        <a class="Footer__link" href="tel:18889638944">1-888-963-8944</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="sms:18142519966">1-814-251-9966 (Text)</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="mailto:help@allbirds.com">help@allbirds.com</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/pages/returns-exchanges">Returns/Exchanges</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/pages/help">FAQ/Contact Us</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/pages/afterpay">Afterpay</a>
                    </li>
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
                        <a class="Footer__link" href="/collections/trino-socks">Socks</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/collections/gift-cards">Gift Cards</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="https://www.allbirds.com/pages/refer-a-friend" target="_blank" rel="noopener noreferrer">Refer a Friend</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="https://allbirds.app.link/e/AweOhG1itbb" target="_blank" rel="noopener noreferrer">Download the Allbirds App</a>
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
                        <a class="Footer__link" href="/pages/sustainable-practices">Sustainability</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="https://ir.allbirds.com/">Investors</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/pages/partnerships">Partnerships</a>
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
                        <a class="Footer__link" href="https://cdn.shopify.com/s/files/1/1104/4168/files/Allbirds_CATSA_Disclosure_FINAL.pdf?v=1606779259" target="_blank" rel="noopener noreferrer">California Transparency Act</a>
                    </li><li class="Footer__link-list-item">
                        <a class="Footer__link" href="/pages/community-offers">Community Offers</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3 class="Footer__heading Typography--quaternary-heading Typography--with-margin">Follow the Flock</h3>
                <p class="Footer__social-icons-description Typography--paragraph">Exclusive offers, a heads up on new things, and sightings of Allbirds in the wild. Oh, we have cute sheep, too. #weareallbirds</p>
                <div>
                    <a href="#"><i class="fa-reg"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="//cdn.allbirds.com/image/upload/f_auto,q_auto/cms/1X4EOQF1JJOjMbo48vDUzB/c249da5825f9ae39f1f53bdb90d65285/icon-b-corp.svg" alt="">
            </div>
            <div class="col-md-3">
                <ul class="Footer__country-flags-list"><li class="Footer__country-flags-list-item">
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

    </script>
@endsection
