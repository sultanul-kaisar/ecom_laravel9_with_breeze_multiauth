@extends('admin.admin_master')
@section('title')
    Edit Policy | Admin
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
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Policy</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <form action="{{ route('update.policy', $policy->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block-content block-content-full">
                <!-- Regular -->
                <h2 class="content-heading">Edit Policy Details</h2>
                <div class="row items-push">
                    <div class="col-lg-12 col-xl-12">

                        <div class="row mb-4">

                            <div class="col-10 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Policy Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $policy->title }}" placeholder="Enter policy title" required>
                            </div>

                        </div>


                        <div class="row mb-4">
                            <div class="col-10 mb-4">
                                <label class="form-label"  >Policy Description <span class="text-danger">*</span></label>
                                <textarea id="js-ckeditor" name="description">{{ $policy->description }}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                    </div>
                </div>
                <!-- END Regular -->

                <!-- Submit -->
                <div class="row items-push">
                    <div class="col-lg-5 offset-lg-5">
                        <button type="submit" class="btn btn-primary">Update Policy</button>
                    </div>
                </div>
                <!-- END Submit -->
            </div>
        </form>
        <!-- jQuery Validation -->

    </main>

@endsection
