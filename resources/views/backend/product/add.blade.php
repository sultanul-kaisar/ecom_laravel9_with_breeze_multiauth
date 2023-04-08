@extends('admin.admin_master')
@section('title')
    Add Product | Admin
@endsection
@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Product</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block-content block-content-full">
                <!-- Regular -->
                <h2 class="content-heading">Add Product Details</h2>
                <div class="row items-push">
                    <div class="col-lg-12 col-xl-12">

                        {{--1st row start--}}
                        <div class="row mb-4">
                            <div class="mb-4 col-xl-3">

                                <label class="form-label" for="val-skill">Brands <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="brand_id" name="brand_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                    <option selected="" disabled="" >Select Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" >{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label" for="val-skill">Category <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="category_id" name="category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                    <option value=""  selected="" disabled="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label" for="val-skill">Sub Category <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="subcategory_id" name="subcategory_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                    <option selected="" value="" disabled="">Select Sub Category</option>
                                </select>
                                @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label" for="val-skill">Sub-Sub Category <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="subsubcategory_id" name="subsubcategory_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                    <option selected="" value="" disabled="">Select Sub-Sub Category</option>
                                </select>
                                @error('subsubcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        {{--1st row end--}}

                        {{--2nd Row Start--}}
                        <div class="row mb-4">

                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Product Name<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label"  >Product Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter product code" required="">
                                @error('product_code')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label"  >Product Quantity <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter product quantity" required="">
                                @error('product_qty')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        {{--2nd Row End--}}

                        {{--3rd Row Start--}}
                        <div class="row mb-4">

                            <div class="mb-4 col-xl-3">
                                <label class="form-label"  >Buying Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="buying_price" name="buying_price" placeholder="Enter product buying price" required="">
                                @error('buying_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label"  >Selling Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Enter product selling price" required="">
                                @error('selling_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-xl-3">
                                <label class="form-label"  >Discount Price </label>
                                <input type="text" class="form-control" id="discount_price" name="discount_price" placeholder="Enter discount price" >
                                @error('discount_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Product Tags<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="product_tags" name="product_tags" data-role="tagsinput" placeholder="Enter product tags" required>
                            </div>

                        </div>
                        {{--3rd Row Ends--}}

                        {{--4th Row Start--}}
                        <div class="row mb-4">

                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Product Size <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="product_size" name="product_size" data-role="tagsinput" placeholder="Enter product size" required>
                            </div>

                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Product Colors<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="product_color" name="product_color" data-role="tagsinput" placeholder="Enter product colors " required>
                            </div>

                        </div>
                        {{--4th Row Ends--}}

                        {{--5th Row Start--}}
                        <div class="row mb-4">

                            <div class="col-4 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Product Thumbnail <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="product_thumbnail" name="product_thumbnail" onchange="mainThumbUrl(this)"  required>
                                <img src="" id="thumbnail">
                            </div>
                            <div class="col-8 mb-4">
                                <label class="form-label" for="dm-profile-edit-lastname">Multiple Images <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="multiImg" name="multi_img[]" multiple=""  required>
                                <div class="row" id="preview_img"></div>
                            </div>

                        </div>
                        {{--5th Row Ends--}}


                        {{--6th Row Start--}}
                        <div class="row mb-4">
                            <div class="col-10 mb-4">
                                <label class="form-label" >Short Description <span style="color: red">*</span></label>
                                <textarea class="form-control" id="short_desc" name="short_desc" rows="4"></textarea>
                            </div>

                        </div>
                        {{--6th Row Ends--}}

                        {{--7th Row Start--}}
                        <div class="row mb-4">
                            <div class="col-10 mb-4">
                                <label class="form-label"  >Product Long Description <span class="text-danger">*</span></label>
                                <textarea id="js-ckeditor" name="long_desc"></textarea>
                                @error('long_desc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        {{--7th Row Ends--}}


                        {{--8th Row Starts--}}
                        <div class="row mb-4">

                            <div class="mb-4 col-xl-3">
                                <input class="form-check-input" type="checkbox" value="1" id="block-form7-remember-me" name="hot_deals">
                                <label class="form-check-label" for="block-form7-remember-me">Hot Deals</label>
                            </div>

                            <div class="mb-4 col-xl-3">
                                <input class="form-check-input" type="checkbox" value="1" id="block-form7-remember-me" name="featured">
                                <label class="form-check-label" for="block-form7-remember-me">Featured</label>
                            </div>

                            <div class="mb-4 col-xl-3">
                                <input class="form-check-input" type="checkbox" value="1" id="block-form7-remember-me" name="special_offer">
                                <label class="form-check-label" for="block-form7-remember-me">Special Offers</label>
                            </div>

                            <div class="mb-4 col-xl-3">
                                <input class="form-check-input" type="checkbox" value="1" id="block-form7-remember-me" name="special_deals">
                                <label class="form-check-label" for="block-form7-remember-me">Special Deals</label>
                            </div>

                        </div>
                        {{--7th Row Ends--}}

                    </div>
                </div>
                <!-- END Regular -->

                <!-- Submit -->
                <div class="row items-push">
                    <div class="col-lg-5 offset-lg-5">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </div>
                <!-- END Submit -->
            </div>
        </form>
        <!-- jQuery Validation -->

    </main>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/subcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('select[name="subsubcategory_id"]').html('');
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_title  +'</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
            $('select[name="subcategory_id"]').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id) {
                    $.ajax({
                        url: "{{  url('/subsubcat/ajax') }}/"+subcategory_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsub_title + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

        });
    </script>


    <script type="text/javascript">
        function mainThumbUrl(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#thumbnail').attr('src',e.target.result).width(100).height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>

        $(document).ready(function(){
            $('#multiImg').on('change', function(){ //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file){ //loop though each file
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file){ //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                                        .height(80); //create image element
                                    $('#preview_img').append(img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                }else{
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });

    </script>
@endsection
