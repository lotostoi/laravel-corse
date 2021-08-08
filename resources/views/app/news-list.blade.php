@extends('layouts/app/index')
@section('header')
    <x-app.-header :background="$category['img']" :title="$category['title']"></x-app.-header>
@endsection

@section('content')
    <x-app.-news-list :news="$newsList"></x-app.-news-list>
@endsection
