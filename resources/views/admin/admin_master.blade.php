<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>@yield('title')</title>

        <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png') }}" sizes="192x192" href="{{ asset('admin/assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/media/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
        <!-- Dashmix framework -->
        <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">


        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

        <style type="text/css">
            .bootstrap-tagsinput .tag{
                margin-right: 2px;
                color: white;
                background-color: #2F4F4F;
                font-weight: 700px;
            }
        </style>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
{{--        <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('admin/assets/css/themes/xwork.min.css') }}"> -->--}}
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->

        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

            @include('admin.body.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            @include('admin.body.header')
            <!-- END Header -->

            <!-- Main Container -->
            @yield('main')
            <!-- END Main Container -->

            <!-- Footer -->
            @include('admin.body.footer')
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
              Dashmix JS

              Core libraries and functionality
              webpack is putting everything together at {{ asset('admin/assets/_js/main/app.js') }}
        -->
        <script src="{{ asset('admin/assets/js/dashmix.app.min.js') }}"></script>

        <!-- jQuery (required for DataTables plugin) -->
        <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

        <!-- Page JS Plugins -->
        <script src="{{ asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>

        <script src="{{ asset('admin/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>

        <!-- Page JS Helpers (SimpleMDE + CKEditor plugins) -->
        <script>Dashmix.helpersOnLoad(['js-ckeditor', 'js-simplemde']);</script>

        <!-- Page JS Plugins -->
        <script src="{{ asset('admin/assets/js/plugins/chart.js/chart.min.js') }}"></script>


        <!-- Page JS Code -->
        <script src="{{ asset('admin/assets/js/pages/be_pages_ecom_dashboard.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('admin/assets/js/code.js') }}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
                @if(Session::has('message')){
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type){
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            }
            @endif
        </script>


    </body>
</html>
