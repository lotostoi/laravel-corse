@extends('layouts/app/index')
@section('title') @parent - new - {{ $title }} @endsection

@section('header')
    <x-app.header :background="$background" :title="$title" :padding="'50px 0 20px 0'"></x-app.header>
@endsection

@section('content')
    <div class="container">
        <h1>Формa заказа на получение выгрузки данных из какого-либо источника. </h1>
        <form action="{{ route('person-area-add-resource') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="exampleInputUser">User name:</label>
                <input type="text" name="user" class="form-control  @error('user') border border-danger  @enderror "
                    id="exampleInputUser" aria-describedby="emailHelp" placeholder="user name" value="{{ old('user') }}">
                @error('user')
                    <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone:</label>
                <input type="text" name="phone" class="form-control  @error('phone') border border-danger  @enderror "
                    id="phope" placeholder="phone" value="{{ old('phone') }}">
                @error('phone')
                    <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email:</label>
                <input type="text" name="email" class="form-control @error('email') border border-danger  @enderror "
                    id="phope" placeholder="email" value="{{ old('email') }}">
                @error('email')
                    <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Resource</label>
                <input type="resource" name="resource"
                    class="form-control @error('resource') border border-danger  @enderror " id="phope"
                    placeholder="resource" value="{{ old('resource') }}">
                @error('resource')
                    <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    @if (session('success'))
        <div class="w-100 fixed-top " id="successs">
            <div class="col-12 alert-success py-3 text-center" role="alert">
                {{ session('success') }}
            </div>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('successs').style.display = 'none'
            }, 6000)
        </script>
    @endif
@endsection
