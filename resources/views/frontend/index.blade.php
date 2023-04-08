@extends('frontend.main_master')
@section('title')
    Home
@endsection
@section('content')

   <!-- Slider Section Start -->
    @php
        $sliders = \App\Models\Slider::where('status', 1)->get();
    @endphp
   <div class="section slider-section-02">
    <div class="slider-active">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Single Slider Start  -->
                @foreach($sliders as $slider)
                    <div class="single-slider slider-02 swiper-slide animation-style-01" style="background-image: url({{ $slider->slider_img }})">
                        <div class="container">

                            <!-- Slider Content Start -->
                            <div class="slider-content-02 text-center">
                                <h2 class="title">{{ $slider->slider_title }}</h2>
                                <p>{{ $slider->description }}</p>
                                <a href="shop-grid-4-column.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                            </div>
                            <!-- Slider Content End -->

                        </div>
                    </div>
                @endforeach
                <!-- Single Slider End  -->

                <!-- Add Arrows -->
                <div class="swiper-button-next">Next</div>
                <div class="swiper-button-prev">Prev</div>

            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->

<!-- Benefit Section Start -->
<div class="section section-padding-02 mt-n6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">

                <!-- Single Benefit Start -->
                <div class="single-benefit">
                    <img src="{{ asset('frontend') }}/assets/images/icon/icon-1.png" alt="Icon">
                    <h3 class="title">Free Shipping</h3>
                    <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                </div>
                <!-- Single Benefit End -->

            </div>
            <div class="col-lg-4 col-md-6">

                <!-- Single Benefit Start -->
                <div class="single-benefit">
                    <img src="{{ asset('frontend') }}/assets/images/icon/icon-2.png" alt="Icon">
                    <h3 class="title">Safe Payment</h3>
                    <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                </div>
                <!-- Single Benefit End -->

            </div>
            <div class="col-lg-4 col-md-6">

                <!-- Single Benefit Start -->
                <div class="single-benefit">
                    <img src="{{ asset('frontend') }}/assets/images/icon/icon-3.png" alt="Icon">
                    <h3 class="title">Online Support</h3>
                    <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                </div>
                <!-- Single Benefit End -->

            </div>
        </div>
    </div>
</div>
<!-- Benefit Section End -->

<!-- New Product Section Start -->

@php
    $category = \App\Models\Category::orderBy('category_title', 'ASC')->get();
    $products = \App\Models\Product::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
@endphp

<div class="section section-padding-02 mt-n2">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title-02 text-center">
            <h2 class="title">New Products</h2>
        </div>
        <!-- Section Title End -->

        <!-- Product Wrapper 02 Start -->
        <div class="product-wrapper-02">

            <!-- Product Menu Start -->
            <div class="product-menu">
                <ul class="nav justify-content-center">
                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">All</button></li>
                    @foreach($category as $cat)
                        <li><button data-bs-toggle="tab" data-bs-target="#cat{{$cat->id}}"> {{ $cat->category_title }} </button></li>
                    @endforeach
                </ul>
            </div>
            <!-- Product Menu End -->

            <!-- Product Tabs Content Start -->
            <div class="product-tabs-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="row">
                            @foreach($products as $product)
                                @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount/$product->selling_price) * 100;
                                @endphp
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product-02">
                                        <div class="product-images">
                                            <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ $product->product_thumbnail }}" alt="product"></a>

                                            <ul class="product-meta">
                                                <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                                <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                                <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                                            </ul>

                                            @if ($product->discount_price == NULL)
                                                <span class="discount">New</span>
                                            @else
                                                <span class="discount">-{{ round($discount) }}%</span>
                                            @endif
                                        </div>
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

                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                    @foreach($category as $cat)
                        @php
                            $catByProduct = \App\Models\Product::where('category_id',$cat->id)->where('status', 1)->orderBy('id','DESC')->limit(6)->get();
                        @endphp
                        <div class="tab-pane fade" id="cat{{$cat->id}}">
                            <div class="row">
                                @forelse($catByProduct as $product)
                                    @php
                                        $amount = $product->selling_price - $product->discount_price;
                                        $discount = ($amount/$product->selling_price) * 100;
                                    @endphp
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ $product->product_thumbnail }}" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                                    <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                                                </ul>

                                                @if ($product->discount_price == NULL)
                                                    <span class="discount">New</span>
                                                @else
                                                    <span class="discount">-{{ round($discount) }}%</span>
                                                @endif
                                            </div>
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

                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                @empty
                                    <h4 style="color: red; margin-left: 600px; margin-top: 20px">No Products Found!</h4>
                                @endforelse

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Product Tabs Content End -->

        </div>
        <!-- Product Wrapper 02 End -->


    </div>
</div>
<!-- New Product Section End -->

<!-- Banner Section Start -->
<div class="section section-padding mt-n6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Single Banner Start -->
                <div class="single-banner-03">
                    <img src="{{ asset('frontend') }}/assets/images/banner/banner-05.jpg" alt="Banner">

                    <div class="banner-content">
                        <h6 class="sub-title">High-Quality</h6>
                        <h3 class="title"><a href="shop-grid-left-sidebar.html">New Kitchen <br> Furniture</a></h3>
                        <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-6">
                <!-- Single Banner Start -->
                <div class="single-banner-03">
                    <img src="{{ asset('frontend') }}/assets/images/banner/banner-06.jpg" alt="Banner">

                    <div class="banner-content">
                        <h6 class="sub-title">Best-Quality</h6>
                        <h3 class="title"><a href="shop-grid-left-sidebar.html">Bed Room <br> Furniture</a></h3>
                        <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Countdown Section Start -->
<div class="section section-padding overflow-hidden bg-color-01">
    <div class="container">
        <div class="countdown-main-wrapper mt-n10">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Countdown Content Start -->
                    <div class="countdown-content">
                        <h2 class="title">Chair Collection <span>50%</span> Off</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip eao commodo consequat Duis aute irure.</p>

                        <div class="countdown-wrapper">
                            <div class="countdown" data-countdown="2021/11/20" data-format="short">
                                <div class="single-countdown">
                                    <span class="count countdown__time daysLeft"></span>
                                    <span class="value countdown__time daysText"></span>
                                </div>
                                <div class="single-countdown">
                                    <span class="count countdown__time hoursLeft"></span>
                                    <span class="value countdown__time hoursText"></span>
                                </div>
                                <div class="single-countdown">
                                    <span class="count countdown__time minsLeft"></span>
                                    <span class="value countdown__time minsText"></span>
                                </div>
                                <div class="single-countdown">
                                    <span class="count countdown__time secsLeft"></span>
                                    <span class="value countdown__time secsText"></span>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-hover-dark">Shop Now</a>
                    </div>
                    <!-- Countdown Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Countdown Images Start -->
                    <div class="countdown-images">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="shape-3"></div>

                        <div class="image-box">
                            <img src="{{ asset('frontend') }}/assets/images/countdown.png" alt="Countdown">
                        </div>
                    </div>
                    <!-- Countdown Images End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Countdown Section End -->

<!-- Sale Product Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <div class="">
            <!-- Product Wrapper Start -->
            <div class="product-wrapper product-active-02">

                <!-- Product Top Wrapper Start -->
                <div class="product-top-wrapper mt-n1">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"># Sale Products</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Product Menu Start -->
                    <div class="product-menu">
                        <ul class="nav">
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab7">All Time</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab8">This Year</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab9">This Month</button></li>
                        </ul>
                    </div>
                    <!-- Product Menu End -->

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
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-12.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Modern Accent Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-08.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-09.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-10.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Round Swivel Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab8">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-12.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Modern Accent Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-07.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-06.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Herman Arm Grey Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-05.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Living & Bedroom Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab9">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-04.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-03.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Pendant Chandelier Light</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-02.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="product-details.html"><img src="{{ asset('frontend') }}/assets/images/product/product-01.jpg" alt="product"></a>

                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                <div class="price">
                                                    <span class="sale-price">$40.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
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

<!-- Marker Section Start -->
<div class="section section-padding-02 mt-n1">
    <div class="container">

        <!-- Marker Wrapper Start -->
        <div class="marker-wrapper" style="background-image: url({{ asset('frontend') }}/assets/images/marker.jpg);">
            <div class="marker-content">
                <h6 class="sub-title">Furniture eCommerce</h6>
                <h3 class="title">Minimalist <br> Store</h3>
            </div>

            <div class="image-pointer pointer-01">
                <i class="fa fa-plus"></i>

                <div class="pointer-box">
                    <h4 class="name"><a href="#">Products Name Here</a></h4>
                    <span class="price">$40.00</span>
                </div>
            </div>

            <div class="image-pointer pointer-02">
                <i class="fa fa-plus"></i>

                <div class="pointer-box">
                    <h4 class="name"><a href="#">Products Name Here</a></h4>
                    <span class="price">$40.00</span>
                </div>
            </div>

            <div class="image-pointer pointer-03">
                <i class="fa fa-plus"></i>

                <div class="pointer-box">
                    <h4 class="name"><a href="#">Products Name Here</a></h4>
                    <span class="price">$40.00</span>
                </div>
            </div>

            <div class="image-pointer pointer-04">
                <i class="fa fa-plus"></i>

                <div class="pointer-box">
                    <h4 class="name"><a href="#">Products Name Here</a></h4>
                    <span class="price">$40.00</span>
                </div>
            </div>
        </div>
        <!-- Marker Wrapper Start -->

    </div>
</div>
<!-- Marker Section End -->

<!-- Brand Logo Section Start -->
@php
    $brands = \App\Models\Brand::latest()->get();
@endphp
<div class="section section-padding">
    <div class="container">
        <div class="brand-row">
            @foreach( $brands as $brand)

                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ $brand->brand_image }}" alt="brand">
                    </div>
                    <!-- Single Brand Start -->
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Brand Logo Section End -->



@endsection
