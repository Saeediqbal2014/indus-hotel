<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 12:36:23 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Gym - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('layout_assets') }}/images/favicon.ico">
    @include('layouts.header')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index-2.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('layout_assets') }}/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('layout_assets') }}/images/logo-dark.png" alt=""
                                        height="17">
                                </span>
                            </a>

                            <a href="index-2.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('layout_assets') }}/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('layout_assets') }}/images/logo-light.png" alt=""
                                        height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                            </div>
                        </div>






                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('images') }}/user/{{ Auth()->user()->img }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">
                                            {{-- @php
                                                $role = \App\Models\Role::where('id', Auth::user()->role)->first();
                                            @endphp
                                            {{ $role->name }} --}}
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
                                <a class="dropdown-item" href=""><i
                                        class="mdi
                                    mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Profile</span></a>

                                <a class="dropdown-item" href=""><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('layout_assets') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('layout_assets') }}/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index-2.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('layout_assets') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('layout_assets') }}/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('home') }}" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#user" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-account-circle-line"></i> <span data-key="t-authentication">User</span>
                            </a>
                            <div class="collapse menu-dropdown" id="user">

                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-calendar">
                                            User </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-nft-landing">Role </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            {{-- <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Frontend</span>
                            </a> --}}
                            {{-- <div class="collapse menu-dropdown" id="sidebarCharts"> --}}
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#accommodation" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Accommodation
                                    </a>
                                    <div class="collapse menu-dropdown" id="accommodation">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ route('accommodation.add') }}" class="nav-link"
                                                    data-key="t-line"> Add Accommodation
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('accommodation.all') }}" class="nav-link"
                                                    data-key="t-area"> All Accommodation
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sliders" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Slider
                                    </a>
                                    <div class="collapse menu-dropdown" id="sliders">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('admin/add-slider') }}" class="nav-link"
                                                    data-key="t-line"> Add Slider
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/all-slider') }}" class="nav-link"
                                                    data-key="t-area"> All Slider
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#welcome" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Welcome
                                    </a>
                                    <div class="collapse menu-dropdown" id="welcome">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('http://127.0.0.1:8000/admin/edit-welcome/1') }}"
                                                    class="nav-link" data-key="t-line"> Add welcome
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                    <a href="{{ url('admin/all-welcome') }}" class="nav-link"
                                                        data-key="t-area"> All welcome
                                                    </a>
                                                </li> --}}

                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#about" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        about
                                    </a>
                                    <div class="collapse menu-dropdown" id="about">
                                        <ul class="nav nav-sm flex-column">
                                            {{-- <li class="nav-item">
                                                    <a href="{{ url('admin/add-about') }}" class="nav-link"
                                                        data-key="t-line"> Add about
                                                    </a>
                                                </li> --}}
                                            <li class="nav-item">
                                                <a href="{{ url('admin/edit-about/1') }}" class="nav-link"
                                                    data-key="t-area">About Us
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#facility" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Facility
                                    </a>
                                    <div class="collapse menu-dropdown" id="facility">
                                        <ul class="nav nav-sm flex-column">
                                            {{-- <li class="nav-item">
                                                    <a href="{{ url('admin/add-facility') }}" class="nav-link"
                                                        data-key="t-line"> Add facility
                                                    </a>
                                                </li> --}}
                                            <li class="nav-item">
                                                <a href="{{ url('admin/edit-facility/1') }}" class="nav-link"
                                                    data-key="t-area">facility
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#discount" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Discount
                                    </a>

                                    <div class="collapse menu-dropdown" id="discount">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('admin/add-discount') }}" class="nav-link"
                                                    data-key="t-line"> Add Discount
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/all-discount') }}" class="nav-link"
                                                    data-key="t-area"> All Discount
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="nav-item">
                                    <a href="#video" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Video
                                    </a>

                                    <div class="collapse menu-dropdown" id="video">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('admin/add-video') }}" class="nav-link"
                                                    data-key="t-line"> Add Video
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/all-video') }}" class="nav-link"
                                                    data-key="t-area"> All Video
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="nav-item">
                                    <a href="#events" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Event
                                    </a>
                                    <div class="collapse menu-dropdown" id="events">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('admin/add-event') }}" class="nav-link"
                                                    data-key="t-line"> Add Event
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/all-event') }}" class="nav-link"
                                                    data-key="t-area"> All Event
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#dineins" class="nav-link" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarApexcharts"
                                        data-key="t-apexcharts">
                                        Dine in
                                    </a>
                                    <div class="collapse menu-dropdown" id="dineins">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ url('admin/add-dinein') }}" class="nav-link"
                                                    data-key="t-line"> Add Dine In
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/all-dinein') }}" class="nav-link"
                                                    data-key="t-area"> All Dine in
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>



                            </ul>
                </div>
                </li>


                {{-- @endif --}}
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->

    <div class="container-fluid">
        @yield('content')
    </div>
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Gexton.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Gexton Inc
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    <!-- JAVASCRIPT -->
    @include('layouts.footer')
</body>

</html>
