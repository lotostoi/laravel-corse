@extends('layouts/app/index')
@section('header')
    <x-app.-header :background="$background" :title="$title"></x-app.-header>
@endsection

@section('content')
    <x-app.-categories :categoriesList="$categoriesList"></x-app.-categories>
@endsection
