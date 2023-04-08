@extends('frontend.main_master')
@section('title')
    Login
@endsection
@section('content')
<!-- Page Banner Section Start -->
<div class="section" >
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Login</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">Login</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Login Section Start -->
<div class="section section-padding mt-n1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Login & Register Start -->
                <div class="login-register-wrapper">
                    <h4 class="title">Login to Your Account</h4>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="single-form">
                            <input type="text" name="email" placeholder="Username or email *">
                        </div>
                        <div class="single-form">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="single-form">
                            <input type="checkbox" id="remember">
                            <label for="remember"><span></span> Remember me</label>
                        </div>
                        <div class="single-form">
                            <button type="submit" class="btn btn-primary btn-hover-dark">Login</button>
                        </div>
                    </form>
                    <p><a href="#">Lost your password?</a></p>
                    <p>No account? <a href="{{ route('register') }}">Create one here.</a></p>
                </div>
                <!-- Login & Register End -->
            </div>
        </div>
    </div>
</div>
<!-- Login Section End -->



@endsection
