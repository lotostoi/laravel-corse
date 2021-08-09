@extends('layouts.admin.index')
@section('admin-content')
    <div class="row justify-content-center">
        <a href="{{ route('admin-add-news') }}" class="btn btn-dark col-6"> <span class="icon-bg"><i
                    class="mdi mdi-plus menu-icon"></i></span> Add new
        </a>
    </div>
    <hr />
    <h1 class="row justify-content-center my-3 text-dark">Current news</h1>
    <table class="table-responsive table-dark row px-2">
        <thead class="thead-dark col-12 py-3">
            <tr class="row bg-dark py-3">
                <th class="col-1 pl-2" scope="col">#id</th>
                <th class="col-2" scope="col">Title</th>
                <th class="col-3" scope="col">Text</th>
                <th class="col-3" scope="col">Image</th>
                <th class="col-1" scope="col">Date</th>
                <th class="col-2" scope="col">Controll</th>

            </tr>
        </thead>
        <tbody class="thead-light col-12">
            @foreach ($news as $new)
                <tr class="row mt-2">
                    <th scope="row" class="col-1 pl-2 h6" text>#:<small class="text-success">{{ $new['id'] }}</small>
                    </th>
                    <td class="col-2"> {{ $new['title'] }}</td>
                    <td class="col-3">{{ $new['content'] }}</td>
                    <td class="col-3"> <img class="w-100" src="{{ $new['img'] }}" alt="img"> </td>

                    <td class="col-1">
                        {{ now()->format('d-m-y') }}
                    </td>

                    <td class="col-2">
                        <a href="#" class="row link text-warning">Update this new</a>
                        <a href="#" class="row link text-danger mt-3">Delete this new</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
