<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Herbal Products') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/typicons/typicons.css">
    <link rel="stylesheet"
          href="{{ asset('star_admin_template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"
          href="{{ asset('star_admin_template') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('star_admin_template') }}/images/favicon.png"/>

    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
</head>
<body>
@auth()
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="/">
                        <img src="{{ asset('star_admin_template') }}/images/logo.svg" alt="logo"/>
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="/">
                        <img src="{{ asset('star_admin_template') }}/images/logo-mini.svg" alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Welcome, <span
                                class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
                        <h3 class="welcome-sub-text">Manage herbal products conveniently</h3>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle"
                                 src="{{ asset('star_admin_template') }}/images/faces/face8.jpg"
                                 alt="{{ auth()->user()->name }}"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle"
                                     src="{{ asset('star_admin_template') }}/images/faces/face8.jpg"
                                     alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                                <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                @include('layouts.menu')
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span
                            class="text-muted text-center text-sm-left d-block d-sm-inline-block">{{ config('app.name') }}</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © {{ now()->year }}. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth

<!-- plugins:js -->
<script src="{{ asset('star_admin_template') }}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('star_admin_template') }}/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('star_admin_template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('star_admin_template') }}/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('star_admin_template') }}/js/off-canvas.js"></script>
<script src="{{ asset('star_admin_template') }}/js/hoverable-collapse.js"></script>
<script src="{{ asset('star_admin_template') }}/js/template.js"></script>
<script src="{{ asset('star_admin_template') }}/js/settings.js"></script>
<script src="{{ asset('star_admin_template') }}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('star_admin_template') }}/js/jquery.cookie.js" type="text/javascript"></script>
<script src="{{ asset('star_admin_template') }}/js/dashboard.js"></script>
<script src="{{ asset('star_admin_template') }}/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<script src="{{ asset('star_admin_template') }}/js/select2.js"></script>
<script src="{{ asset('star_admin_template') }}/vendors/select2/select2.min.js"></script>
</body>
</html>
