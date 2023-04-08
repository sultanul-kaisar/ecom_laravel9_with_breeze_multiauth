@extends('admin.admin_master')
@section('title')
    Edit | Sub Category
@endsection
@section('main')
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Sub Category</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Sub Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Edit Sub Category</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('update.subcategory', $editSubcategory->id) }}" method="POST" >
                        @csrf
                        <!-- Regular -->
                        <div class="content-header col-11 mb-4">
                            <h2 class="content-heading">Edit Sub Category</h2>
                            <a type="button" href="{{ route('all.subcategory') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                        </div>

                        <div class="row push">
                            <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                                <div class="row mb-4">
                                    <div class="col-6 mb-4">
                                        <label class="form-label" for="dm-profile-edit-firstname">Sub Category Title <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="subcategory_title" name="subcategory_title" value="{{ $editSubcategory->subcategory_title }}" placeholder="Enter sub-category title" required>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label" for="dm-profile-edit-lastname">Select Category <span style="color: red">*</span></label>
                                        <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="dm-ecom-product-category" name="category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                            <option selected="" disabled=""  >Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $editSubcategory->category_id ? 'selected': ''}} >{{ $category->category_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5 offset-lg-4">
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-plus-circle opacity-50 me-1"></i> Update Sub Category
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </form>
                </div>
            </div>
        </div>
    </main>



@endsection
