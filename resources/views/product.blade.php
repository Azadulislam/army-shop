@extends('layouts.app')
@section('content')
    <section>
        <div class="container-lg py-5">
            <div class="product-details">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="product-image">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="product-description border border-gray-700 p-3 rounded h-100">
                            <h1 class="text-base text-2xl">{{ $product->name }}</h1>
                            <p class="text-base">{{ $product->description }}</p>
                            <div class="grid grid-gap-2 grid-cols-2 hidden">
                                <h4 class="text-lg font-semibold">Price</h4>
                                <p class="text-base">{{ $product->retail_price }}</p>
                            </div>
                            <div class="d-flex flex-column mt-8">
                                <span class="text-base font-semibold mr-3">Category:</span>
                                <span class="mr-3">{{ $product->category->name }}</span>
                                <span class="text-base font-semibold mr-3">Sub Category:</span>
                                <span class="mr-3">{{ $product->subcategory->name }}</span>
                                <span class="text-base font-semibold mr-3">Type:</span>
                                <span class="mr-3">{{ $product->type->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-product mt-10">
                <h1 class="fs-3 font-semibold my-3 px-4 py-[12px] rounded primary-bg text-white">Related Product</h1>
                <div class="row">
                    @foreach($product->relatedProduct as $related)
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="best-product border border-gray-700 rounded shadow-sm">
                                <div class="product-image">
                                    <a href="{{ route('product.view', $related->relatedToProduct->slug) }}">
                                        <img src="{{ asset('images/product.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="details px-3 py-3">
                                    <div class="product-name text-lg fw-semibold">
                                        {{ ttl($related->relatedToProduct->name, 20) }}
                                    </div>
                                    <div class="product-category text-base">
                                        {{ ttl($related->relatedToProduct->description, 25)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>

    </script>
@endsection
