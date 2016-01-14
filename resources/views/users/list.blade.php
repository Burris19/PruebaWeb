@extends('users.layout')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-condensed">
                <thead>
                    <td>#</td>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>NIT</th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @foreach($users as $Key => $user)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->nit }}</td>
                            <td>{{ $user->bithday }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection()