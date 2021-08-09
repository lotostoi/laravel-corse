@extends('layouts.admin.index')
@section('admin-content')
    <div class="row">
        <h1 class="col-12 text-dark"> Add category</h1>
        <form class="col-lg-8 col-sm-8">
            <div class="form-group">
                <label for="exampleInputTitle" class="text-dark">Title category</label>
                <input type="email" class="form-control" id="exampleInputTitle" aria-describedby="tytleHelp"
                    placeholder="Enter tytle">

            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1" class="text-dark">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="col-3 btn btn-dark">Add category</button>
        </form>
    </div>
@endsection
