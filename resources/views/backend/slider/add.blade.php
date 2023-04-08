@extends('admin.admin_master')
@section('title')
    Slider | Add
@endsection

@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Slider</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Add New Slider</h2>
                    <a type="button" href="{{ route('view.slider') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Slider Title</label>
                                <input type="text" class="form-control" id="slider_title" name="slider_title" placeholder="Enter slider title" >
                            </div>

                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-lastname">Slider Description</label>
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter slider description" ></textarea>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-street-1">Slider Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" onchange="imageUrl(this)" id="slider_img" name="slider_img" required>
                            </div>
                            <div class="col-5">
                                <img src="" id="sliderImage">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-plus-circle opacity-50 me-1"></i> Add Slider
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
                    $('#sliderImage').attr('src',e.target.result).width(250).height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
