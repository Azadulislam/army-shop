@extends('layouts.app')
@section('content')
<section>
    <div class="container-lg py-5 px-4">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-12">
                <ul class="categories list-unstyled">
                    <li>Army</li>
                </ul>
                <h4 class="text-lg mt-5 mb-2">Search Filter</h4>
                <ul class="types">
                    <li>Men</li>
                </ul>
            </div>
            <div class="col-md-10 col-sm-9 col-12">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="product shadow-lg">
                            <div class="product-image-one">
                                <img class="w-100" src="{{ asset('images/product.jpg') }}" alt="">
                                <div class="popup-button">
                                    <a class="primary-btn white-btn d-inline-block sm:text-sm text-xs" href="#">Shop Men</a>
                                    <a class="primary-btn white-btn mt-2 d-inline-block sm:text-sm text-xs" href="#">Shop Women</a>
                                </div>
                            </div>
                            <div class="details px-4 py-3">
                                <div class="product-name border-bottom text-xl fw-semibold">
                                    Royal Events
                                </div>
                                <div class="product-category text-lg d-flex align-items-center">
                                    <span class="me-2"><i class="fa-brands fa-cloudflare text-2xl"></i></span>Cozy Boot
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-center mt-4">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>

    </script>
@endsection
