<!DOCTYPE html>

<html>

<x-Head></x-Head>

<body>
    @yield('header')
    <x-Navbar></x-Navbar>
    @yield('content')
    <x-Footer></x-Footer>
    <x-Scripts></x-Scripts>
</body>

</html>