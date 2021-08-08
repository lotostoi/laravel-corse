@extends('layouts/app/index')

@section('header')
    <x-app.-header :background="$new['img']"></x-app.-header>
@endsection

@section('content')
    <x-app.-one :new="$new"></x-app.-one>
@endsection
