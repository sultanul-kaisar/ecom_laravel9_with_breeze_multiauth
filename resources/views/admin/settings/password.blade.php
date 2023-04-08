@extends('admin.admin_master')
@section('title')
    Admin | Change Password
@endsection
@section('main')

    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Update Password</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('admin.password.update') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <!-- Change Password -->
                        <h2 class="content-heading pt-0">
                            <i class="fa fa-fw fa-asterisk text-muted me-1"></i> Update Password
                        </h2>
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="text-muted">
                                    Updating your sign in password is an easy way to keep your account secure.
                                </p>
                            </div>
                            @if(count($errors))
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger" role="alert"> {{ $error}} </p>
                                @endforeach
                            @endif
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <label class="form-label" for="dm-profile-edit-password">Current Password</label>
                                    <input type="password" class="form-control" id="dm-profile-edit-password" name="oldpassword">
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label" for="dm-profile-edit-password-new">New Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new" name="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label" for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="confirm_password">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle opacity-50 me-1"></i> Update Password
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile -->
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection

