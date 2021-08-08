<!DOCTYPE html>
<html lang="en">

<x-admin.head></x-admin.head>


<body class="sidebar-icon-only">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <x-admin.navbar></x-admin.navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <x-admin.sidebar></x-admin.sidebar>
            <!-- partial -->
            <x-admin.content></x-admin.content>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('assets/vendor/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/vendor/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
