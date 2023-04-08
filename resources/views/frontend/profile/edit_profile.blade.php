@extends('frontend.main_master')
@section('title')
    Edit Profile
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                <h3 class="contact__form--title mb-40">Account Information</h3>
                                <form class="contact__form--inner" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        {{-- <input class="contact__form--input" value="{{ Auth::user()->id; }}" name="user_id" id="input1" type="hidden"> --}}
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <label class="contact__form--label">Profile Image</label>
                                            <input type="file" onchange="document.getElementById('profile_image').src=window.URL.createObjectURL(this.files[0])" name="profile_image" class="contact__form--input">
                                        </div>

                                        <div class="col-md-6 space-t-15 mb-4">
                                            <div class="image-thumb-preview">
                                                <img id="profile_image" class="image-thumb-preview ec-image-preview v-img"
                                                    src="{{ (!empty($userData->profile_image))? url($userData->profile_image):url('upload/no_image.jpg') }}" alt="edit" width="100px" height="100px" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input1">First Name <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="first_name" id="input1" value="{{ $userData->first_name }}" placeholder=" Enter Your first name!" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input2">Last Name <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="last_name" id="input2" value="{{ $userData->last_name }}" placeholder=" Enter Your last name!" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input4">Email <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="email" id="input4" value="{{ $userData->email }}" placeholder="Enter Your Email" type="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input3">Phone Number <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="phone" id="input3" value="{{ $userData->phone }}" placeholder=" Enter Your Phone Number!" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('user.profile') }}" class="btn btn-lg btn-secondary qty_close" data-bs-dismiss="modal"
                                            aria-label="Close">Close</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->




    <script type="text/javascript">

        $(document).ready(function(){
            $('#profile-photo').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>



@endsection
