@extends('frontend.main_master')
@section('title')
Product Lists
@endsection

@section('content')


 <!-- Page Banner Section Start -->
 <div class="section" style="margin-bottom: -70px" >
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Shop Page</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">{{ $subsubcat->subsub_title }}</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Shop Section Start -->
<div class="section section-padding mt-n10">
    <div class="container">

        <!-- Shop top Bar Start -->
        <div class="shop-top-bar">
            <div class="shop-text">
                {{-- <p><span>12</span> Product Found of <span>30</span></p> --}}
            </div>
            <div class="shop-tabs">
                <ul class="nav">
                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fa fa-th"></i></button></li>
                    <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fa fa-list"></i></button></li>
                </ul>
            </div>
            <div class="shop-sort">
                <span class="title">Sort By :</span>
                <select class="nice_select">
                    <option value="1">Default</option>
                    <option value="2">Default</option>
                    <option value="3">Default</option>
                    <option value="4">Default</option>
                </select>
            </div>
        </div>
        <!-- Shop top Bar End -->

        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid">

                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">
                    <div class="row">
                        @forelse ($products as $product)

                        @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                        @endphp
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ url($product->product_thumbnail) }}" alt="product"></a>
                                <div class="product-content">
                                    <h4 class="title"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name }}</a></h4>
                                    <div class="price">
                                        @if ($product->discount_price == NULL)
                                            <span class="sale-price">${{ $product->selling_price }}</span>
                                        @else
                                            <span class="sale-price">${{ $product->discount_price }}</span>
                                            <span class="old-price">${{ $product->selling_price }}</span>
                                        @endif
                                    </div>
                                </div>
                                <ul class="product-meta">
                                    <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                    <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                                </ul>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        @empty
                            <span style="color:brown; text-align:right">Product is comming soon... </span>
                        @endforelse
                    </div>
                </div>
                <!-- Shop Product Wrapper End -->

            </div>
            <div class="tab-pane fade" id="list">

                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">

                    @forelse ( $products as $product )
                    <!-- Single Product Start -->
                    <div class="single-product-02 product-list">
                        <div class="product-images">
                            <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ url($product->product_thumbnail) }}" alt="product"></a>

                            <ul class="product-meta">
                                <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h4 class="title"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name}}</a></h4>
                            <div class="price">
                                @if ($product->discount_price == NULL)
                                        <span class="sale-price">${{ $product->selling_price }}</span>
                                    @else
                                        <span class="sale-price">${{ $product->discount_price }}</span>
                                        <span class="old-price">${{ $product->selling_price }}</span>
                                    @endif
                            </div>
                            <p>{{ $product->short_desc}}</p>
                        </div>
                    </div>
                    <!-- Single Product End -->
                    @empty
                        <span style="color:brown; text-align:center">Product is comming soon... </span>
                    @endforelse





                </div>
                <!-- Shop Product Wrapper End -->

            </div>
        </div>

        <!-- Page pagination Start -->
        {{-- <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div> --}}
        <!-- Page pagination End -->

    </div>
</div>
<!-- Shop Section End -->


@endsection
