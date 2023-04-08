@extends('admin.admin_master')
@section('title')
    Brand | Edit
@endsection

@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Brand</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <form action="{{ route('update.brand', $editBrand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Edit Brand</h2>
                    <a type="button" href="{{ route('all.brand') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Brand Name <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $editBrand->brand_name }}" placeholder="Enter title in english" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-street-1">Brand Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" onchange="imageUrl(this)" id="brand_image" name="brand_image">
                            </div>
                            <div class="col-12 ">
                                <img class="float-end" src="{{ url($editBrand->brand_image) }}" height="80" width="150" id="brandImage">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-plus-circle opacity-50 me-1"></i> Update Brand
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Submit -->
            </form>
        </div>
    </main>

    <script>
        function imageUrl(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#brandImage').attr('src',e.target.result).width(100).height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
