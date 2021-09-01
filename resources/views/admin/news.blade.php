@extends('layouts.admin.index')
@section('admin-content')
    <div class="container">
{{--         @if (success)
            @include('admin.message',['success'=> success])
        @endif --}}
        <div class="row justify-content-center">
            <a href="{{ route('admin-page-add-new') }}" class="btn btn-dark col-6"> <span class="icon-bg"><i
                        class="mdi mdi-plus menu-icon"></i></span> Add new
            </a>
        </div>
        <hr />
        <h1 class="row justify-content-center my-3 text-dark">Current news</h1>
        <div class="row admin-wrapper-news">
            <div class="row w-100 bg-dark">
                <div class="col-1 py-3 text-center">#id</div>
                <div class="col-3 py-3 text-center">Title</div>
                <div class="col-3 py-3 text-center">Text</div>
                <div class="col-2 py-3 text-center">Image</div>
                <div class="col-1 py-3 text-center">Date</div>
                <div class="col-2 py-3 text-center">Controll</div>
            </div>
            @foreach ($news as $new)
                <div class="row w-100 bg-light mt-1 text-dark">
                    <div class="col-1 py-1">
                        #:<small class="text-success">{{ $new->id }}</small>
                    </div>
                    <div class="col-3 py-1">
                        <p>{{ $new->title }}</p>
                    </div>
                    <div class="col-3 py-1">{{ $new->content }}</div>
                    <div class="col-2 py-1">
                        <img class="col-12" src="{{ asset($new->img) }}" alt="img">
                    </div>

                    <div class="col-1 py-1">
                        {{ now()->format('d-m-y') }}
                    </div>

                    <div class="col-2 py-1">
                        <a href="{{ route('admin-page-update-new', ['id' => $new->id]) }}"
                            class="row link text-warning">Update divis new</a>
                        <a href="#" data-delete-id="{{ $new->id }}" class="row link text-danger mt-3">Delete divis
                            new</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $news->links() }}
    </div>

@endsection
