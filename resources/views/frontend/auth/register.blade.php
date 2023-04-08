@extends('frontend.main_master')
@section('title')
    Sign Up
@endsection
@section('content')


<!-- Page Banner Section Start -->
<div class="section">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Register</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">Register</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Register Section Start -->
<div class="section section-padding mt-n1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Login & Register Start -->
                <div class="login-register-wrapper">
                    <h4 class="title">Create New Account</h4>
                    <p>Already have an account? <a href="{{ route('login') }}">Log in instead!</a></p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="single-form">
                            <input type="text" name="first_name" placeholder="First Name">
                        </div>
                        <div class="single-form">
                            <input type="text" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="single-form">
                            <input type="text" name="email" placeholder="Email Address *">
                        </div>
                        <div class="single-form">
                            <input type="text" name="username" placeholder="Username *">
                        </div>
                        <div class="single-form">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="single-form">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="single-form">
                            <input type="checkbox" id="receive">
                            <label for="receive"> <span></span> I have read and agree to the terms & conditions</label>
                        </div>
                        <div class="single-form">
                            <button type="submit" class="btn btn-primary btn-hover-dark">Register</button>
                        </div>
                    </form>
                </div>
                <!-- Login & Register End -->
            </div>
        </div>
    </div>
</div>
<!-- Register Section End -->



@endsection
