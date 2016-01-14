@extends('users.layout')

@section('content')



    @include('users.create')

    <div class="container">
        <button class="btn btn-success" id="showPanel">Agregar Usuario</button>
        <hr>
        <div class="row">
            <table class="table table-striped" id="bodyTable">
                <thead>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>NIT</th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    <tr id="clone" style="display: none">
                        <td class="name"></td>
                        <td class="phone"></td>
                        <td class="nit"></td>
                        <td class="birthday"></td>
                    </tr>
                    @foreach($users as $Key => $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->nit }}</td>
                            <td>{{ $user->birthday }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection()