@extends('layouts.admin.index')
@section('admin-content')
    <div class="row">
        <h1 class="col-12 text-dark"> Add news</h1>
        <form class="col-lg-8 col-sm-8" method="POST" action="{{ route('admin-create-new') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="text-dark">Title new:</label>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label class="text-dark">New text:</label>
                @error('text')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <textarea class="form-control" rows="3" name="text">{{ old('text') }}</textarea>
            </div>
            <p class="text-dark h2">Select categories:</p>
            @error('category-id')
                <div class="alert alert-danger">Select categories!</div>
            @enderror
            <div class="categories row border-top border-bottom my-4 pl-3">
                @foreach ($categories as $cat)
                    <div class="form-check col-4 pl-3">
                        <input type="checkbox" class="form-check-input" name="{{ 'category-id' . $cat->id }}"
                            id="{{ 'cat' . $cat->id }}" @if (old('category-id' . $cat->id) == $cat->id) checked @endif
                            value="{{ $cat->id }}">
                        <label class="form-check-label text-dark" for="{{ 'cat' . $cat->id }}">{{ $cat->title }}</label>
                    </div>
                @endforeach
            </div>
            <p class="text-dark h2 border-bottom pb-3 mb-3">Load image</p>
            @error('load-image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group load-image ">
                <input type="file" class="form-control-file" name="load-image" value="{{ old('load-image') }}">
            </div>
            <button type="submit" class="col-3 btn btn-dark">Add new</button>
        </form>
    </div>

@endsection
