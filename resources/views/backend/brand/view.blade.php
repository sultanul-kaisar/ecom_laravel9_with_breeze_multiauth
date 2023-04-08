@extends('admin.admin_master')
@section('title')
    Brands | View
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Brands</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brands</li>
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
                        Brand List
                    </h3>
                    <a type="button" href="{{ route('add.brand') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-plus me-1"></i>Add Brand</a>
                </div>

                <div class="block-content block-content-full col-lg-6">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Brand Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($brands as $brand)
                            <tr>
                                <td class="text-center">{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td><img src="{{ url($brand->brand_image) }}"></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                        <a type="button" href="{{route('edit.brand', $brand->id)}}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i>Edit</a>

                                        <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal__{{ $brand->id }}">Delete</a>

                                        {{-- <a type="button" id="delete" href="{{route('delete.brand', $brand->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash me-1"></i>Delete</a> --}}
                                        </a>
                                    </div>
                                    <div class="modal fade" id="exampleModal__{{ $brand->id }}" tabindex="-1" aria-labelledby="exampleModal__{{ $brand->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">

                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center" >
                                                <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                                <h4 class="h4 mb-0 mt-3" style="color: red">Warning</h4>
                                                <p class="card-text">Are you sure you want to delete data?</p>
                                                <strong class="card-text" style="color: red">Once deleted, you will not be able to recover this data!</strong>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a type="button" href="{{ route('delete.brand', $brand->id) }}" class="btn btn-danger">Delete</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


@endsection
