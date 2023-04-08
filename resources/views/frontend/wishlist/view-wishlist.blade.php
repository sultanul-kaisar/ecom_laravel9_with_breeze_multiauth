@extends('frontend.main_master')
@section('title')
    Wish-List
@endsection
@section('content')
<!-- Page Banner Section Start -->
<div class="section" style="margin-bottom: -70px">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Wish List</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">Wishlist</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

  <!-- Wish-List Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
        <div class="cart-wrapper">
            <!-- Cart Wrapper Start -->
            <div class="cart-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="product-thumb">Image</th>
                            <th class="product-info">product Information</th>
                            <th class="product-add-to-cart">Add to Cart</th>
                            <th class="product-action">Action</th>
                        </tr>
                    </thead>
                    <tbody id="wishlist">

                    </tbody>
                </table>
            </div>
            <!-- Cart Wrapper End -->
        </div>
    </div>
</div>
<!-- Wish-List Cart Section End -->



@endsection
