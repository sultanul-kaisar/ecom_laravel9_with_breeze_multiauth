@extends('admin.admin_master')
@section('title')
    Admin | Profile
@endsection
@section('main')
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Admin Profile</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Hero -->
        <div class="bg-cover" style="background-color: honeydew">
            <div class="bg">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" href="#">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ (!empty($adminData->profile_photo_path))? url($adminData->profile_photo_path): url('upload/no_image.jpg') }}" alt="">
                        </a>
                        <h1 class="fw-bold my-2 text-black">{{ $adminData->name }}</h1>
                        <h2 class="h4 fw-bold text-black-75">
                            {{ $adminData->email }}
                        </h2>
                        <a class="btn btn-secondary" href="{{ route('admin.profile.edit') }}">
                            <i class="fa fa-fw fa-user-edit opacity-50"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
    </main>

@endsection

