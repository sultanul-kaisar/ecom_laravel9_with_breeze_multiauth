@extends('admin.admin_master')
@section('title')
    Blogs | Manage
@endsection

@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Blogs</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Blogs List
                    </h3>
                </div>
                <div class="block-content block-content-full col-lg-6">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th class="text-center">Image </th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Bloger Name</th>
                            <th class="text-center">Status </th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($blogs as $blog)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>

                                    <td>
                                        <img class="img-fluid" height="80px" width="80px"  src="{{ url($blog->blog_image) }}">
                                    </td>

                                    <td style="text-align: center" class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-block-fromright">
                                        <a href="#">{{ $blog->title }}</a>
                                    </td>

                                    <td style="text-align: center">{{ $blog->bloger_name }}</td>

                                    <td style="text-align: center">
                                        @if($blog->status == 1)
                                            <span class="badge bg-success"> Active </span>
                                        @else
                                            <span class="badge bg-danger"> InActive </span>
                                        @endif

                                    </td>

                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                            <a type="button" href="{{ route('edit.blog', $blog->id) }}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i></a>
                                            <a type="button" id="delete" href="{{ route('blog.delete', $blog->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash-can me-1"></i></a>

                                            @if($blog->status == 1)
                                                <a href="{{ route('blog.inactive',$blog->id) }}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
                                            @else
                                                <a href="{{ route('blog.active',$blog->id) }}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->

        </div>
    </main>



@endsection
