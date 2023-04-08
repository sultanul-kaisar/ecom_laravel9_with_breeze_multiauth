@php
$brands = \App\Models\Brand::latest()->get();
@endphp

<div class="instagram__section section--padding">
    <div class="container-fluid p-0">
        <div class="section__heading text-center mb-40">
            <h2 class="section__heading--maintitle">Our Brands</h2>
        </div>
        <div class="instagram__section--inner instagram__swiper--activation swiper">
            <div class="swiper-wrapper">

                @foreach( $brands as $brand)
                    <div class="swiper-slide">
                        <div class="instagram__thumbnail position__relative">
                            <a class="instagram__thumbnail--link display-block"><img class="instagram__thumbnail--img display-block" src="{{ $brand->brand_image }}" alt="instagram-img">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div>
        </div>
    </div>
</div>
