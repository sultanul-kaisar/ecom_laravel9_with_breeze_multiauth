@extends('frontend.main_master')
@section('title')
{{ $product->product_name }}
@endsection

@section('content')

<!-- Page Banner Section Start -->
<div class="section" style="margin-bottom: -70px">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Product Details</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="">{{ $product->category->category_title }}</a></li>
                <li><a href="">{{ $product->subcategory->subcategory_title }}</a></li>
                <li><a href="{{ route('productBySubSubcat', $product->subsubcategory->id)}}">{{ $product->subsubcategory->subsub_title }}</a></li>
                <li><a href="">{{ $product->product_name }}</a></li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Product Details Section Start -->
<div class="section section-padding-02 mt-n10">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <!-- Product Details Images Start -->
                <div class="product-details-images">

                    <!-- Details Gallery Images Start -->
                    <div class="details-gallery-images">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-img zoom">
                                        <img src="{{ url($product->product_thumbnail) }}" alt="Product Image">
                                        <div class="inner-stuff">
                                            <div class="gallery-item" data-src="{{ url($product->product_thumbnail) }}">
                                                <a href="javascript:void(0)">
                                                    <i class="lastudioicon-full-screen"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($multiImages as $item )
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                            <img src="{{ url($item->photo_name) }}" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ url($item->photo_name) }}">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Details Gallery Images End -->

                    <!-- Details Gallery Thumbs Start -->
                    <div class="details-gallery-thumbs">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ url($product->product_thumbnail) }}" alt="Product Thumbnail">
                                </div>
                                @foreach ($multiImages as $item )
                                    <div class="swiper-slide">
                                        <img src="{{ url($item->photo_name) }}" alt="Product Thumbnail">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                    </div>
                    <!-- Details Gallery Thumbs End -->

                </div>
                <!-- Product Details Images End -->

            </div>
            <div class="col-lg-6">

                <!-- Product Details Description Start -->
                <div class="product-details-description">
                    <h4 class="product-name" id="pname">{{ $product->product_name }}</h4>
                    <div class="price">
                        @if ($product->discount_price == NULL)
                            <span class="sale-price">${{ $product->selling_price }}</span>
                        @else
                            <span class="sale-price">${{ $product->discount_price }}</span>
                            <span class="old-price">${{ $product->selling_price }}</span>
                        @endif
                    </div>
                    <div class="review-wrapper">
                        <div class="review-star">
                            <div class="star" style="width: 80%;"></div>
                        </div>
                        <p>( 1 Customer Review )</p>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="product-color">
                                <span class="lable" style="margin-top: 30px">Color:</span>
                                <div class="single-select2">
                                    <div class="form-select2">
                                        <select class="select2" id="color" required>
                                            <option selected="" disabled="">Select a Color *</option>
                                            @foreach($product_color as $color)
                                                <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($product->product_size == null)

                        @else
                            <div class="col-xl-6">
                                <div class="product-color">
                                    <span class="lable" style="margin-top: 30px">Size:</span>
                                    <div class="single-select2">
                                        <div class="form-select2">
                                            <select class="select2" id="size" required>
                                                <option selected="" disabled="">Select a Size *</option>
                                                @foreach($product_size as $size)
                                                    <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <p>{{ $product->short_desc }}</p>

                    <div class="product-meta">
                        <div class="col-xl-2 product-quantity d-inline-flex">
                            {{-- <button type="button" class="sub">-</i></button> --}}
                            <input style="width: 74px;" type="number" id="qty" value="1" min="1" />
                            {{-- <button type="button" class="add">+</button> --}}
                        </div>
                        <div class="meta-action">
                            <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                            <button type="submit" onclick="addToCart()" class="btn btn-dark btn-hover-primary">Add To Cart</button>
                        </div>
                        <div class="meta-action">
                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="meta-action">
                            <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="single-info">
                            <span class="lable">Product Code:</span>
                            <span class="value">{{ $product->product_code }}</span>
                        </div>
                        <div class="single-info">
                            <span class="lable">Categories:</span>
                            <span class="value"><a href="#">Office,</a> <a href="#">Home</a></span>
                        </div>
                        <div class="single-info">
                            <span class="lable">tag:</span>
                            <span class="value"><a href="#">Furniture</a></span>
                        </div>
                        <div class="single-info">
                            <span class="lable">Share:</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Product Details Description End -->

            </div>
        </div>

    </div>
</div>
<!-- Product Details Section End -->

<!-- Product Details tab Section Start -->
<div class="section section-padding-02">
    <div class="container">

        <!-- Product Details Tabs Start -->
        <div class="product-details-tabs">
            <ul class="nav justify-content-center">
                <li><button data-bs-toggle="tab" data-bs-target="#information">Information</button></li>
                <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                <li><button data-bs-toggle="tab" data-bs-target="#reviews">Reviews (03)</button></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="information">
                    <!-- Information Content Start -->
                    <div class="information-content">
                        <h4 class="title">Information</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>

                        <h4 class="title">Fabric & care</h4>
                        <ul>
                            <li>Faux suede fabric</li>
                            <li>Gold tone metal hoop handles.</li>
                            <li>RI branding</li>
                            <li>Snake print trim interior</li>
                            <li>Adjustable cross body strap</li>
                            <li>Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                        </ul>

                        <h4 class="title">Size</h4>
                        <p>one size</p>
                    </div>
                    <!-- Information Content End -->
                </div>
                <div class="tab-pane fade show active" id="description">
                    <!-- Description Content Start -->
                    <div class="description-content">
                        <p>{!! $product->long_desc !!}</p>
                    </div>
                    <!-- Description Content End -->
                </div>
                <div class="tab-pane fade" id="reviews">
                    <!-- Reviews Content Start -->
                    <div class="reviews-content">

                        <!-- Review Comment Start  -->
                        <div class="reviews-comment">
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-1.png" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2021</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-2.png" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Aidyn Cody</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2021</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-3.png" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2021</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                        </div>
                        <!-- Review Comment End  -->

                        <!-- Review Form Start  -->
                        <div class="reviews-form">
                            <h3 class="reviews-title">Add a review </h3>

                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="john.smith@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="review-rating">
                                            <label class="title">Rating:</label>
                                            <ul id="rating" class="rating">
                                                <li class="star" title='Poor' data-value='1'><i class="fa fa-star-o"></i></li>
                                                <li class="star" title='Poor' data-value='2'><i class="fa fa-star-o"></i></li>
                                                <li class="star" title='Poor' data-value='3'><i class="fa fa-star-o"></i></li>
                                                <li class="star" title='Poor' data-value='4'><i class="fa fa-star-o"></i></li>
                                                <li class="star" title='Poor' data-value='5'><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="Write your comments here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="btn btn-dark btn-hover-primary">Submit Review</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Review Form End  -->

                    </div>
                    <!-- Reviews Content End -->
                </div>
            </div>
        </div>
        <!-- Product Details Tabs End -->

    </div>
</div>
<!-- Product Details tab Section End -->

<!-- Sale Product Section Start -->
<div class="section section-padding mt-n1">
    <div class="container">
        <div class="">
            <!-- Product Wrapper Start -->
            <div class="product-wrapper product-active-02">

                <!-- Product Top Wrapper Start -->
                <div class="product-top-wrapper mt-n1">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"># Related Products</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Swiper Arrows End -->
                    <div class="swiper-arrows">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                    </div>
                    <!-- Swiper Arrows End -->

                </div>
                <!-- Product Top Wrapper End -->

                <!-- Product Tabs Content Start -->
                <div class="product-tabs-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab7">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($related_products as $product)

                                        @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                        @endphp
                                        <div class="swiper-slide">
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
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Tabs Content End -->

            </div>
            <!-- Product Wrapper End -->
        </div>
    </div>
</div>
<!-- Sale Product Section End -->

@endsection
