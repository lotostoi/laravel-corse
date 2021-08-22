@extends('layouts.admin.index')
@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('admin-add-category') }}" class="btn btn-dark col-6"> <span class="icon-bg"><i
                        class="mdi mdi-plus menu-icon"></i></span> Add category
            </a>
        </div>
        <hr />
        <h1 class="row justify-content-center my-3  text-dark">Current categories</h1>
        <div class="row">
            <div class="row w-100 bg-dark">
                <div class="col-1 py-3 text-center">#id</div>
                <div class="col-3 py-3 text-center">Title</div>
                <div class="col-3 py-3 text-center">Image</div>
                <div class="col-3 py-3 text-center">Date</div>
                <div class="col-2 py-3 text-center">Controll</div>
            </div>

            @foreach ($categories as $cat)
                <div class="row w-100 bg-light mt-1 text-dark">
                    <div class="col-1 py-1 text-center">#:<small class="text-success">{{ $cat->id }}</small>
                    </div>
                    <div class="col-3 py-1 text-center"> {{ $cat->title }}</div>

                    <div class="col-3 py-1 text-center"> <img class="col-12" src="{{ $cat->img }}" alt="img"> </div>

                    <div class="col-3 py-1 text-center">
                        {{ now()->format('d-m-y') }}
                    </div>

                    <div class="col-2 py-1 text-center">
                        <a href="#" class="row link text-warning">Update this category</a>
                        <a href="#" class="row link text-danger mt-3">Delete this category</a>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $categories->links() }}
    </div>
@endsection
