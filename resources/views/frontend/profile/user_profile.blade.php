@extends('frontend.main_master')
@section('title')
    Profile
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Ec breadcrumb start -->
 <!-- Start breadcrumb section -->
 <section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- my account section start -->
<section class="my__account--section section--padding">
    <div class="container">
        <p class="account__welcome--text">Hello, {{ $userData->username }} welcome to your dashboard!</p>
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">My Dashboard</h2>
                <ul class="account__menu">
                    <li class="account__menu--list active"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    <li class="account__menu--list active"><a href="{{ route('user.profile') }}">Profile</a></li>
                    <li class="account__menu--list"><a href="my-account-2.html">Addresses</a></li>
                    <li class="account__menu--list"><a href="wishlist.html">Wishlist</a></li>
                    <li class="account__menu--list"><a href="{{ route('user.logout') }}">Log Out</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-vendor-block-profile" >
                                <h2 class="account__content--title h3 mb-20">Account Information</h2>
                                <div class="ec-vendor-block-img space-bottom-30" >
                                    <div class="" >
                                        <a href="{{ route('user.profile.edit') }}" class="btn btn-lg btn-primary float-end"
                                            data-link-action="editmodal" title="Edit Detail"
                                            >Edit Detail</a>
                                    </div>
                                    <div class="ec-vendor-block-detail mb-4">
                                        <img class="v-img" src="{{ (!empty($userData->profile_image))? url($userData->profile_image):url('upload/no_image.jpg') }}" height="120px" width="120px">
                                        {{-- <h5 class="name">{{ $userData->name }}</h5> --}}
                                    </div>
                                    <p><strong class="account__details--title h4">Name :</strong>
                                        <span>{{ $userData->first_name }} {{ $userData->last_name }}</span>
                                    </p>
                                    <p><strong class="account__details--title h4">Email Address :</strong> <span>{{ $userData->email }}</span></p>
                                    <p><strong class="account__details--title h4">Phone :</strong>
                                        <span>
                                            @if(!empty($userData->phone))
                                                {{ $userData->phone }}
                                            @else
                                                Update Your Phone Number!
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->


@endsection
