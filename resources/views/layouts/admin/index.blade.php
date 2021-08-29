<!DOCTYPE html>
<html lang="en">

<x-admin.head></x-admin.head>


<body>
    <div class="container-scroller">

        <x-admin.navbar></x-admin.navbar>

        <div class="container-fluid page-body-wrapper">

            <x-admin.sidebar></x-admin.sidebar>

            <div class="main-panel">

                <div class="content-wrapper">
                    @yield('admin-content')
                </div>

                <x-admin.footer></x-admin.footer>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/misc.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
