@extends('layouts/app/index')

@section('header')
    <x-app.-header :background="$background ?? ''" :title="$title ?? ''"></x-app.-header>
@endsection

@section('content')
    <x-app.-about-app></x-app.-about-app>
    <x-app.-last-news :news="$news"></x-app.-last-news>
@endsection
