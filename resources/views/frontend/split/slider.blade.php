@php
$sliders = \App\Models\Slider::where('status', 1)->get();
@endphp

<section class="hero__slider--section mb-60">
    <div class="hero__slider--inner hero__slider--activation swiper">
        <div class="hero__slider--wrapper swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide ">
                <div class="hero__slider--items slider__4--bg" style="background-image: url({{ $slider->slider_img }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <div class="slider__content4">
                                    <span class="slider__content4--subtitle text-white">{{ $slider->description }}</span>
                                    <h2 class="slider__content4--maintitle text-white h1">{{ $slider->slider_title }}</h2>
                                    <a class="btn slider__btn style4" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="slider__pagination swiper-pagination"></div>
    </div>
</section>
