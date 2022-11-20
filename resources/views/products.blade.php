@extends('layouts.app')
@section('content')
<section class="products">
    <div class="container py-5 px-4">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-12">
                <div class="border rounded h-100 p-3">
                    <a class="pb-2" href="{{ route('products') }}"><i class="bi bi-x-lg"></i> Clear Search</a>
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
            <div class="col-md-10 col-sm-9 col-12">
                <div class="border rounded h-100 p-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3 border-bottom justify-content-start" id="pills-tab" role="tablist">
                                <li class="" role="presentation">
                                    <label class="products-tab-button text-uppercase"><input type="checkbox" name="category" class="hidden" value="On Duty">On Duty</label>
                                </li>
                                <li class="" role="presentation">
                                    <label class="products-tab-button text-uppercase"><input type="checkbox" name="category" class="hidden" value="Ceremonials">Ceremonials</label>
                                </li>
                            </ul>
                        </div>
                        @forelse($products as $product)
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
                                        <div class="product-name border-bottom text-lg fw-semibold">
                                            {{ substr($product->name, 0, 22) }}@if(strlen($product->name)> 22)...@endif
                                        </div>
                                        <div class="product-category text-lg d-flex align-items-center">
                                            <span class="me-2 text-2xl"><i class="bi bi-clouds"></i></span>{{ $product->category->name }}
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
@include('layouts.sign-up')
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
