@extends('layouts.app')
@section('content')
<section class="products">
    <div class="container py-5 px-4">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-5 col-12">
                <div class="border rounded h-100 p-3">
                    <a class="pb-2" href="{{ route('product.index') }}"><i class="bi bi-x-lg"></i> Clear Search</a>
                    <ul class="categories list-unstyled">
                        @foreach($subCategories as $subCategory)
                        <li><label class="search-item" ><input type="radio" name="subcategory" class="hidden search-input" @if(isset($_GET['subcategory'])?$_GET['subcategory']:'' == $subCategory->slug) checked @endif value="{{ $subCategory->slug }}">{{ $subCategory->name }}</label></li>
                        @endforeach
                    </ul>
                    <h4 class="text-lg mt-3 mb-2">Search Filter</h4>
                    <ul class="types">
                        @foreach($types as $type)
                        <li><label class="search-item"><input type="radio" name="type" class="hidden search-input"@if(isset($_GET['type'])?$_GET['type']:'' == $type->slug) checked @endif value="{{ $type->slug }}"> {{ $type->name }}</label></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-7 col-12">
                <div class="border rounded h-100 p-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3 border-bottom justify-content-start" id="pills-tab" role="tablist">
                                @foreach($categories as $category)
                                <li class="" role="presentation">
                                    <label class="products-tab-button text-uppercase"><input type="checkbox" name="category" class="hidden" value="On Duty">
                                        <label class="search-item" for="{{ $category->name }}"><input type="radio" name="category" class="hidden search-input">{{ $category->name }}</label>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @forelse($products as $product)
                            <div class="col-md-6 col-lg-3 col-sm-12 col-12 mb-3">
                                <div class="best-product shadow-lg border border-gray-700 rounded">
                                    <div class="product-image">
                                        <a href="{{ route('product.view', $product->slug) }}">
                                            <img src="{{ asset('images/product.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="details px-4 py-3">
                                        <div class="product-name fs-3 fw-semibold">
                                            {{ ttl($product->name, 16) }}
                                        </div>
                                        <div class="product-category fs-5">
                                            {{ ttl($product->description, 23) }}
                                        </div>
                                        <div class="order-btn flex justify-between mt-2">
                                            <a href="#" class="font-semibold font-base text-red-500"></a>
                                            <a href="#" class="font-semibold text-base   text-red-500">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 mb-3">
                                <p class="text-2xl text-indigo-600 text-center">No Products Added</p>
                            </div>
                        @endforelse
                    </div>

                    <div class="row">
                        @if(!$request->subcategory && !$request->type)
                            {{ $products->links() }}
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            let searchInput = $('.search-input');
            let paginate = $('.page-link');
            let url = '{{ $current }}';
            // subCategory.click((e)=>{
            //     e.preventDefault();
            //     let parameter = $(e.target).data('parameter');
            //     window.location.href = url+parameter;
            // })
            let c = 0;

            paginate.click((e)=>{
                // e.preventDefault();
                console.log(e.target.href);
            })

            searchInput.click((e)=>{
                searchUrl();
            })

            function searchUrl() {
                let params = '';
                searchInput.each((index, item)=>{
                    if($(item).is(":checked")){
                        let pName = item.name;
                        let pValue = item.value;
                        if(c == 0){
                            params = params + '?'+pName+'='+pValue;
                            c = 1;
                        }else{
                            params = params + '&&'+pName+'='+pValue;
                        }
                    }
                })
                // console.log(url+params);
                window.location.href = url+params;
            }
        })
    </script>
@endsection
