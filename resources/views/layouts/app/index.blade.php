<!DOCTYPE html>

<html>

<x-app.head></x-app.head>

<body>
    @yield('header')
    <x-app.navbar></x-app.navbar>
    @yield('content')
    <x-app.footer></x-app.footer>
    <x-app.scripts></x-app.scripts>
</body>

</html>