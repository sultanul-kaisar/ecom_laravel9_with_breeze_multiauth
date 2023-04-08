@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{ route('admin.dashboard') }}">
              <span class="smini-visible">
                <span class="opacity-75">x</span>
              </span>
                <span class="smini-hidden">
                Admin<span class="opacity-75">Panel</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ ($route == 'admin.dashboard')? 'active':'' }}" href="{{ route('admin.dashboard') }}">

                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Base</li>

                <li class="nav-main-item {{ ($prefix == '/brand')? 'open': '' }} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-bold"></i>
                        <span class="nav-main-link-name">Brands</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'all.brand')? 'active':'' }}" href="{{ route('all.brand') }}">
                                <span class="nav-main-link-name">Manage Brands</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item {{ ($prefix == '/category')? 'open': (($prefix == '/subcategory')? 'open':(($prefix == '/subsubcat')?  'open': '' ))}} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-object-group"></i>
                        <span class="nav-main-link-name">Category</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'all.category')? 'active':'' }}" href="{{ route('all.category') }}">
                                <span class="nav-main-link-name">All Category</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'all.subcategory')? 'active':'' }}" href="{{ route('all.subcategory') }}">
                                <span class="nav-main-link-name">All Sub Category</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'all.subsubcat')? 'active':'' }}" href="{{ route('all.subsubcat') }}">
                                <span class="nav-main-link-name">All Sub-Sub Category</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item {{ ($prefix == '/product')? 'open': '' }} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-bag-shopping"></i>
                        <span class="nav-main-link-name">Products</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'add.product')? 'active':'' }}" href="{{ route('add.product') }}">
                                <span class="nav-main-link-name">Add Product</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'manage.product')? 'active':'' }}" href="{{ route('manage.product') }}">
                                <span class="nav-main-link-name">Manage Products</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-item {{ ($prefix == '/blog')? 'open': '' }} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-newspaper"></i>
                        <span class="nav-main-link-name">Blogs</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'add.blog')? 'active':'' }}" href="{{ route('add.blog') }}">
                                <span class="nav-main-link-name">Add Blog</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'manage.blog')? 'active':'' }}" href="{{ route('manage.blog') }}">
                                <span class="nav-main-link-name">Manage Blogs</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item {{ ($prefix == '/policy')? 'open': '' }} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-newspaper"></i>
                        <span class="nav-main-link-name">Policies</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'add.policy')? 'active':'' }}" href="{{ route('add.policy') }}">
                                <span class="nav-main-link-name">Add Policy</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'manage.policy')? 'active':'' }}" href="{{ route('manage.policy') }}">
                                <span class="nav-main-link-name">Manage Policies</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-item {{ ($prefix == '/slider')? 'open': '' }} ">
                    <a class="nav-main-link nav-main-link-submenu " data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon far fa-clone"></i>
                        <span class="nav-main-link-name">Slider</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ ($route == 'view.slider')? 'active':'' }}" href="{{ route('view.slider') }}">
                                <span class="nav-main-link-name">Manage Sliders</span>
                            </a>
                        </li>
                    </ul>
                </li>




            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
