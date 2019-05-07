@section('tabla')
    <div class="tabla_usuarios">
        <h1>Tabla de usuarios</h1>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Role</th>
                <th>Modificar Usuario</th>
            </tr>

            @foreach($usuarios as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href=""><img src="../../../../resources/img/baseline-edit-24px.svg"
                                        alt="Editar usuario"></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
