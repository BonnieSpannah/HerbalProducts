<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Herbal Products') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('star_admin_template') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('star_admin_template') }}/images/favicon.png" />

    <style type="text/css">
        .animals-background {
            background: url('{{ asset('images/animals.jpg') }}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
        .herbs-background {
            background: url('{{ asset('images/herbs.jpg') }}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
        .animals-and-herbs-background {
            background: url('{{ asset('images/animals-and-herbs.jpg') }}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0 animals-and-herbs-background">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('star_admin_template') }}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('star_admin_template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('star_admin_template') }}/js/off-canvas.js"></script>
<script src="{{ asset('star_admin_template') }}/js/hoverable-collapse.js"></script>
<script src="{{ asset('star_admin_template') }}/js/template.js"></script>
<script src="{{ asset('star_admin_template') }}/js/settings.js"></script>
<script src="{{ asset('star_admin_template') }}/js/todolist.js"></script>
<!-- endinject -->
</body>

</html>
