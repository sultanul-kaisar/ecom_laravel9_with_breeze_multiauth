@extends('admin.admin_master')
@section('title')
    Edit | Category
@endsection
@section('main')
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Category</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">

            <form action="{{ route('update.category', $editCategory->id) }}" method="POST">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Update Category</h2>
                    <a type="button" href="{{ route('all.category') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-firstname">Category Title <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="category_title" name="category_title" value="{{ $editCategory->category_title }}" placeholder="Enter category title" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-street-1">Category Icon <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="category_icon" value="{{ $editCategory->category_icon }}" placeholder="Enter fa fa icon class" name="category_icon" required>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> Update Category
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Submit -->
            </form>
        </div>
    </main>


@endsection
