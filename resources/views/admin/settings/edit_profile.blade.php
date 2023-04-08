@extends('admin.admin_master')
@section('title')
    Admin | Edit Profile
@endsection
@section('main')

    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Profile</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fa fa-fw fa-user-circle text-muted me-1"></i> Admin Profile
                        </h2>
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="text-muted">
                                    Your account’s vital info. Your username will be publicly visible.
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <label class="form-label" for="dm-profile-edit-name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name.." value="{{ $editData->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="dm-profile-edit-email">Email Address</label>
                                    <input type="email" class="form-control" id="mail" name="email" placeholder="Enter your email.." value="{{ $editData->email }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Your Avatar</label>
                                    <div class="mb-3">
                                        <img class="img-avatar" src="{{ (!empty($editData->profile_photo_path))? url($editData->profile_photo_path):url('upload/no_image.jpg') }}" id="profile-edit-avatar" alt="">
                                    </div>
                                    <label class="form-label" for="dm-profile-edit-avatar">Choose a new avatar</label>
                                    <input class="form-control" type="file" id="profile-avatar" name="profile_photo_path">
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle opacity-50 me-1"></i> Update Profile
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#profile-avatar').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#profile-edit-avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

@endsection

