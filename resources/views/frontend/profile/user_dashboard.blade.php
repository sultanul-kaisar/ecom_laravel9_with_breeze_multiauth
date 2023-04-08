@extends('frontend.main_master')
@section('title')
    Profile
@endsection
@section('content')
<!-- Page Banner Section Start -->
{{-- <div class="section" style="margin-bottom: -70px" >
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content ml-auto">
            <h2 class="title">My Account</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">My Account</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div> --}}
<!-- Page Banner Section End -->

<!-- My Account Section Start -->
<div class="section section-padding mt-n3">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <!-- My Account Menu Start -->
                <div class="my-account-menu mt-6">
                    <ul class="nav account-menu-list flex-column">
                        <li>
                            <a class="active" data-bs-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                        </li>
                        <li>
                            <a data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> Order</a>
                        </li>
                        <li>
                            <a data-bs-toggle="pill" href="#pills-download"><i class="fa fa-cloud-download"></i> Download</a>
                        </li>
                        <li>
                            <a data-bs-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i> Payment Method</a>
                        </li>
                        <li>
                            <a data-bs-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i> Address</a>
                        </li>
                        <li>
                            <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account Details</a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- My Account Menu End -->
            </div>
            <div class="col-xl-9 col-md-8">
                <!-- Tab content start -->
                <div class="tab-content my-account-tab mt-6">
                    <div class="tab-pane fade show active" id="pills-dashboard">
                        <div class="my-account-dashboard account-wrapper">
                            <h4 class="account-title">Dashboard</h4>
                            <div class="welcome-dashboard">
                                <p>Hello, <strong>{{ $userData->first_name }} {{ $userData->last_name }}</strong>
                            </div>
                            <p class="mt-25">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-order">
                        <div class="my-account-order account-wrapper">
                            <h4 class="account-title">Orders</h4>
                            <div class="account-table text-center mt-30 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="no">No</th>
                                            <th class="name">Name</th>
                                            <th class="date">Date</th>
                                            <th class="status">Status</th>
                                            <th class="total">Total</th>
                                            <th class="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mostarizing Oil</td>
                                            <td>Aug 22, 2020</td>
                                            <td>Pending</td>
                                            <td>$100</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Katopeno Altuni</td>
                                            <td>July 22, 2020</td>
                                            <td>Approved</td>
                                            <td>$45</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Murikhete Paris</td>
                                            <td>June 22, 2020</td>
                                            <td>On Hold</td>
                                            <td>$99</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-download">
                        <div class="my-account-download account-wrapper">
                            <h4 class="account-title">Download</h4>
                            <div class="account-table text-center mt-30 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="name">Product</th>
                                            <th class="date">Date</th>
                                            <th class="status">Expire</th>
                                            <th class="action">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mostarizing Oil</td>
                                            <td>Aug 22, 2020</td>
                                            <td>Yes</td>
                                            <td><a href="#">Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Katopeno Altuni</td>
                                            <td>July 22, 2020</td>
                                            <td>Never</td>
                                            <td><a href="#">Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-payment">
                        <div class="my-account-payment account-wrapper">
                            <h4 class="account-title">Payment Method</h4>
                            <p class="mt-30">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-address">
                        <div class="my-account-address account-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="account-title">Billing address</h4>
                                    <div class="account-address mt-30">
                                        <h6 class="name">Alex Tuntuni</h6>
                                        <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                        <p>Mobile: (123) 456-7890</p>
                                        <a class="btn btn-primary btn-hover-dark" href="#"><i class="fa fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="account-title">Shipping address</h4>
                                    <div class="account-address mt-30">
                                        <h6 class="name">Alex Tuntuni</h6>
                                        <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                        <p>Mobile: (123) 456-7890</p>
                                        <a class="btn btn-primary btn-hover-dark" href="#"><i class="fa fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-account">
                        <div class="my-account-details account-wrapper">
                            <h4 class="account-title">Account Details</h4>

                            <div class="account-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="text" placeholder="Display Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="text" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <h5 class="title">Password change</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="password" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="password" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-dark">Save Change</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab content End -->
            </div>
        </div>
    </div>
</div>
<!-- My Account Section End -->
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
                    <h2 class="account__content--title h3 mb-20">Orders History</h2>
                    <div class="account__table--area">
                        <table class="account__table">
                            <thead class="account__table--header">
                                <tr class="account__table--header__child">
                                    <th class="account__table--header__child--items">Order</th>
                                    <th class="account__table--header__child--items">Date</th>
                                    <th class="account__table--header__child--items">Payment Status</th>
                                    <th class="account__table--header__child--items">Fulfillment Status</th>
                                    <th class="account__table--header__child--items">Total</th>
                                </tr>
                            </thead>
                            <tbody class="account__table--body mobile__none">
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">November 24, 2022</td>
                                    <td class="account__table--body__child--items">Paid</td>
                                    <td class="account__table--body__child--items">Unfulfilled</td>
                                    <td class="account__table--body__child--items">$40.00 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->

@endsection
