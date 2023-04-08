@extends('frontend.main_master')
@section('title')
    Password Change
@endsection
@section('content')
    <!-- breadcrumb__area-start -->
    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Password Change</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb__area-end -->



    <!-- account-details-des-start -->
    <div class="shop-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="product-widget mb-30">
                        <h5 class="pt-title mb-3"><a href="{{route('dashboard')}}"></a>Dashboard</h5>
                        <div class="widget-category-list mt-20">
                            <div class="single-widget-category">
                                <img class="img-fluid img-thumbnail" style="border-radius: 50%; margin-left: 10px " src="{{ (!empty($userData->profile_photo_path))? url($userData->profile_photo_path):url('upload/no_image.jpg') }}" width="100" height="100">

                                <span style="margin-left: 20px; font-size: 25px;"><strong>{{ $userData->name }}</strong></span>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa fa-shopping-bag mr-10"></i>Orders</a>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fa fa-truck mr-10"></i>Track Your Order</a>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fa fa-map-marker mr-10"></i>My Address</a>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" href="{{ route('user.profile') }}" type="button" role="tab" aria-controls="FourCol" aria-selected="true">
                                    <i class="fa fa-user mr-10"></i>Account details
                                </a>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" href="{{ route('change.password') }}"  aria-controls="account-detail" aria-selected="true"><i class="fa fa-key mr-10"></i>Change Password</a>
                            </div>

                            <div class="single-widget-category">
                                <a class="nav-link" href="{{ route('user.logout') }}"><i class="fa fa-sign-out mr-10"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-4">
                    <div class="product__filter-wrap">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <h4 class="mb-0">Password Change </h4>
                            </div>
                        </div>
                    </div>
                    <div class="product__filter-wrap">
                        <div class="row align-items-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <form method="POST" action="{{ route('user.password.update') }}">
                                    @csrf
                                    @if(count($errors))
                                        @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger" role="alert"> {{ $error}} </p>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <label>Current Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" id="oldpassword" name="oldpassword" type="password" placeholder="Enter your current password...">
                                        </div>
                                        <div class="form-group col-md-12 mb-4">
                                            <label>New Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" id="password" name="password" type="password" placeholder="Enter new password...">
                                        </div>
                                        <div class="form-group col-md-12 mb-4">
                                            <label>Confirm Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" id="confirm_password" name="confirm_password" type="password" placeholder="Enter confirm password...">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary submit">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- account-details-des-end -->

@endsection
