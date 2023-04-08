<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title') </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.png">

        <!-- CSS
        ============================================ -->

        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/font-awesome.min.css">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/odometer.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/nice-select.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/select2.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/ion.rangeSlider.min.css">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

        {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js" > --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/plugins.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.min.css">
        -->
    </head>

    <body>
        @include('frontend.body.header')




        <div class="menu-overlay"></div>

        @yield('content')



        <!-- Footer Section Start -->
        @include('frontend.body.footer')
        <!-- Footer Section End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="pe-7s-angle-up"></i>
        </a>
        <!--Back To End-->







        <!-- JS
        ============================================ -->

        <!-- Modernizer & jQuery JS -->
        <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="{{ asset('frontend') }}/assets/js/plugins/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/bootstrap.min.js"></script>

        <!-- Plugins JS -->
        <script src="{{ asset('frontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/ajax-contact.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/appear.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/odometer.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.nice-select.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/select2.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/ion.rangeSlider.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.zoom.min.js"></script>

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <!-- <script src="{{ asset('frontend') }}/assets/js/plugins.min.js"></script> -->


        <!-- Main JS -->
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
            @if(Session::has('message')){
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type){
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            }
            @endif
        </script>


        <!-- Cart modal Start -->
        <div class="modal fade" id="quickView">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" id="closeModel" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">

                                <!-- Quick View Images Start -->
                                <div class="quick-view-images">

                                    <!-- Quick Gallery Images Start -->
                                    <div class="quick-gallery-images">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-img">
                                                        <img src=" " alt="..." id="pthumbnail">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" id="images">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quick Gallery Images End -->

                                    <!-- Quick Gallery Thumbs Start -->
                                    <div class="quick-gallery-thumbs">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">

                                                <div class="swiper-slide">
                                                    <img src=" " alt="..." id="pthumbnail">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-3.jpg" alt="Product Thumbnail">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-4.jpg" alt="Product Thumbnail">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-5.jpg" alt="Product Thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                        <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                    </div>
                                    <!-- Quick Gallery Thumbs End -->

                                </div>
                                <!-- Quick View Images End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Quick View Description Start -->
                                <div class="quick-view-description">
                                    <h4 class="product-name"><span id="pname"></span></h4>
                                    <div class="price">
                                        <span class="sale-price">$<strong id="pprice"></strong></span>
                                        <span class="old-price"><strong id="oldprice"></strong></span>
                                    </div>
                                    <div class="review-wrapper">
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <p>( 1 Customer Review )</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="product-color">
                                                <span class="lable" style="margin-top: 20px">Color:</span>
                                                <div class="single-select2">
                                                    <div class="form-select2">
                                                        <select class="select2" id="color" name="color">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6" id="sizeArea">
                                            <div class="product-color">
                                                <span class="lable" style="margin-top: 20px">Size:</span>
                                                <div class="single-select2">
                                                    <div class="form-select2">
                                                        <select class="select2" id="size" name="size">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p id="short_desc"></p>

                                    <div class="product-meta">
                                        <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                                        <div class="col-xl-2 product-quantity d-inline-flex">
                                            {{-- <button type="button" class="sub">-</i></button> --}}
                                            <input style="width: 74px;" type="number" id="qty" value="1" min="1" />
                                            {{-- <button type="button" class="add">+</button> --}}
                                        </div>
                                        <div class="meta-action">
                                            <input type="hidden" id="product_id">
                                            <button type="submit" class="btn btn-dark btn-hover-primary" onclick="addToCart()">Add To Cart</button>
                                        </div>
                                        <div class="meta-action">
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="meta-action">
                                            <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                        </div>
                                    </div>

                                    <div class="product-info">
                                        <div class="single-info">
                                            <span class="lable">Product Code:  <strong id="pcode"></strong></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="lable">Categories: <strong id="pcategory"></strong></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="lable">Brand: <strong id="pbrand"></strong></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="lable">Stock:
                                                <span style="background: green; color:white" id="avilable"></span>
                                                <span style="background: yellow; color:red" id="stockout"></span>
                                            </span>
                                        </div>
                                        <div class="single-info">
                                            <span class="lable">Share:</span>
                                            <ul class="social">
                                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick View Description End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Modal End -->

        <script type="text/javascript">
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            })
            // Start Product View with Modal
            function productView(id){
                // alert(id)
                $.ajax({
                    type: 'GET',
                    url: '/product/view/modal/'+id,
                    dataType:'json',
                    success:function(data){
                        $('#pname').text(data.product.product_name);
                        $('#pthumbnail').attr('src', '/'+data.product.product_thumbnail);
                        $('#short_desc').text(data.product.short_desc);
                        $('#pcode').text(data.product.product_code);
                        $('#selling_price').text(data.product.selling_price);
                        $('#discount_price').text(data.product.discount_price);
                        $('#pcategory').text(data.product.category.category_title);
                        $('#pbrand').text(data.product.brand.brand_name);

                        $('#product_id').val(id);
                        $('#qty').val(1);
                        // $('#multi_image').attr('src', '/'+data.product.multiimg.photo_name)

                        //Product Price
                        if(data.product.discount_price == null){
                            $('#pprice').text('');
                            $('#oldprice').text('');
                            $('#pprice').text(data.product.selling_price);
                        }else{
                            $('#pprice').text(data.product.discount_price);
                            $('#oldprice').text(data.product.selling_price);
                        }

                        //Product Quantity
                        if(data.product.product_qty > 0) {
                            $('#avilable').text('');
                            $('#stockout').text('');
                            $('#avilable').text('Avilable');
                        }else{
                            $('#avilable').text('');
                            $('#stockout').text('');
                            $('#stockout').text('Out Of Stock');
                        }


                        //multiImages
                        // $.each(data.images,function(value){
                        //     $.append(<img src=" '+value+' " alt="Product Thumbnail">)
                        // })

                        //Color
                        $('select[name="color"]').empty();
                        $.each(data.color,function(key,value){
                            $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
                        }) // end color

                        // Size
                        $('select[name="size"]').empty();
                        $.each(data.size,function(key,value){
                            $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
                            if (data.size == "") {
                                $('#sizeArea').hide();
                            }else{
                                $('#sizeArea').show();
                            }
                        }) // end size


                    }
                })

            } // End Product View with Modal

            //Start Cart

            function addToCart(){
                var product_name = $('#pname').text();
                var id = $('#product_id').val();
                var color = $('#color option:selected').text();
                var size = $('#size option:selected').text();
                var quantity = $('#qty').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data:{
                        color:color,
                        size:size,
                        quantity:quantity,
                        product_name:product_name
                    },
                    url: "/cart/data/store/"+id,
                    success:function(data){
                        miniCart();
                        $('#closeModel').click();
                        // console.log(data)

                        const Toast = Swal.mixin({
                                        position: 'top-end',
                                        toast: true,
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 3000
                                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                        } else {
                            Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                        }

                    }
                })
            }
        </script>


        {{--  Add Wish List Start  --}}

        <script type="text/javascript">

            function addToWishList(product_id){
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "/add-to-wishlist/"+product_id,

                    success:function(data) {
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                        })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                    }
                })
            }
        </script>


        {{--  Add Wish List End  --}}



        {{-- Start Minicart --}}
        <script type="text/javascript">
            function miniCart(){
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType:'json',
                success:function(response){

                        $('span[id="cartTotal"]').text(response.cartTotal);
                        $('#cartQty').text(response.cartQty);
                    var miniCart = ""
                    $.each(response.carts, function(key,value){
                        miniCart += `<div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="/${value.options.image}" alt="Cart">
                                                <span class="product-quantity">${value.qty}x</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-9">
                                                    <div class="cart-item-content">
                                                        <h6 class="product-name">${value.name}</h6>
                                                        <span class="product-price">$${value.price}</span>
                                                        <div class="attributes-content">
                                                            <span style="color: black"><strong>Color:</strong> ${value.options.color} </span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>`
                        });

                    $('#miniCart').html(miniCart);
                }
            })
        }
        miniCart();



        //Remove miniCart Product
        function miniCartRemove(rowId){
            $.ajax({
                type: 'GET',
                url: '/minicart/product-remove/'+rowId,
                dataType:'json',
                success:function(data){
                miniCart();
                // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
    </script>


    {{-- Load Wish-list data --}}

        {{-- Start Minicart --}}
    <script type="text/javascript">
        function wishlist(){
            $.ajax({
                type: 'GET',
                url: '/get-wishlist-product',
                dataType:'json',
                success:function(response){

                    var rows = ""
                    $.each(response, function(key,value){
                        rows += `<tr>
                                <td class="product-thumb">
                                    <img src="/${value.product.product_thumbnail}" alt="">
                                </td>
                                <td class="product-info">
                                    <h6 class="name"><a href="product-details.html">${value.product.product_name}</a></h6>
                                    <div class="product-prices">
                                        ${value.product.discount_price == null
                                            ? `<span class="sale-price">$${value.product.selling_price}</span>`
                                            : `<span class="sale-price">$${value.product.discount_price}</span>
                                                <span class="old-price">$${value.product.selling_price}</span>`
                                        }

                                    </div>

                                </td>
                                <td class="product-add-to-cart">
                                    <button class="action" data-bs-toggle="modal" data-bs-target="#quickView" id="${value.product_id}" value="${value.product_id}" onclick="productView(this.id)">Add To Cart</button>
                                </td>
                                <td class="product-action">
                                    <button type="submit" class="remove" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="pe-7s-trash"></i></button>
                                </td>
                            </tr>`
                    });


                    $('#wishlist').html(rows);
                }
            })
        }
        wishlist();


            //Remove wishlist Product
        function wishlistRemove(id){
            $.ajax({
                type: 'GET',
                url: '/wishlist-remove/'+id,
                dataType:'json',
                success:function(data){
                wishlist();
                // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }

        </script>

        {{-- End Wish-list data --}}


    </body>

</html>
