@extends('admin.admin_master')
@section('title')
    Sub-Sub Category | View
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Sub-Sub Categories</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Sub Categories</li>
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
                        Sub-Sub Categories List
                    </h3>
                    <a type="button" class="btn btn-primary push mb-md-0" href="{{ route('add.subsubcat') }}"><i class="fa fa-plus me-1"></i>Add Sub-Sub Category</a>
                </div>
                <div class="block-content block-content-full col-lg-6">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">#</th>
                                <th class="text-center">Category Title</th>
                                <th class="text-center">Sub Category Title</th>
                                <th class="text-center">Sub-Sub Category Title</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($subsubcategories as $subsubcat)
                            <tr>
                                <td class="text-center">{{ $i++ }}</td>

                                <td class="text-center"> {{ $subsubcat->category->category_title }} </td>

                                <td class="text-center"> {{ $subsubcat->subcategory->subcategory_title }} </td>

                                <td class="text-center">{{ $subsubcat->subsub_title }}</td>


                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                        <a type="button" href="{{ route('edit.subsubcat', $subsubcat->id) }}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i>Edit</a>
                                        <a type="button" id="delete" href="{{ route('delete.subsubcat', $subsubcat->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash me-1"></i>Delete</a>
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
