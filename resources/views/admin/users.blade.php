@extends('layouts.admin.index')
@section('admin-content')
    <hr />
    <h1 class="row justify-content-center my-3 text-dark">Users</h1>


<div class="container">
    <table class="table-responsive table-dark row px-2">
        <thead class="thead-dark col-12 py-3">
            <tr class="row bg-dark py-3">
                <th class="col-1 pl-2" scope="col">#id</th>
                <th class="col-2" scope="col">Name</th>
                <th class="col-3" scope="col">email</th>
                <th class="col-3" scope="col">logo</th>
                <th class="col-1" scope="col">role</th>
                <th class="col-2" scope="col">Controll</th>

            </tr>
        </thead>
        <tbody class="thead-light col-12">
            @foreach ($users as $new)
                <tr class="row mt-2">
                    <th scope="row" class="col-1 pl-2 h6">#:<small class="text-success">{{ $new->id }}</small>
                    </th>
                    <td class="col-2"> {{ $new->name }}</td>
                    <td class="col-3">{{ $new->email }}</td>
                    <td class="col-3"> <img class="w-25" src="{{ $new->logo }}" alt="img"> </td>

                    <td class="col-1">
                        {{  $new->role }}
                    </td>

                    <td class="col-2">
                        <a href="#" class="row link text-warning">Update this user</a>
                        <a href="#" class="row link text-danger mt-3">Delete this user</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection

