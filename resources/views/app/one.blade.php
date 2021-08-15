@extends('layouts/app/index')
@section('title') @parent - new - {{ $new['title'] }} @endsection
@section('header')
    <x-app.header :background="$new['img']"></x-app.header>
@endsection

@section('content')
    <x-app.one :new="$new" :categories="$categories"></x-app.one>
@endsection
