@extends('layouts/app/index')
@section('title') @parent - new - {{ $title }} @endsection

@section('header')
    <x-app.header :background="$background" :title="$title"></x-app.header>
@endsection

@section('content')
    <x-app.reviews.add-review :success="$success"></x-app.reviews.add-review>
    <x-app.reviews.reviews :reviews="$reviews"></x-app.reviews.review>
@endsection
