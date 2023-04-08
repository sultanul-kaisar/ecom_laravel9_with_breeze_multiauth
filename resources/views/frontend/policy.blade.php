@extends('frontend.main_master')
@section('title')
    Privacy Policy
@endsection

@section('content')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Privacy Policy</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Privacy Policy</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start privacy policy section -->
    <div class="privacy__policy--section section--padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="privacy__policy--content">
                        <h2 class="privacy__policy--content__title">Who we are</h2>
                        <p class="privacy__policy--content__desc">Our website address is: <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    @foreach ($policies as $policy )

                        <div class="privacy__policy--content section_2">
                            <h2 class="privacy__policy--content__title">{{ $policy->title }}</h2>

                            <p class="privacy__policy--content__desc" style="margin-left: 30px">{!! $policy->description !!}</p>

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End privacy policy section -->

</main>
@endsection
