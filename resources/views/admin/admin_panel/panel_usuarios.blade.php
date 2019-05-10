@section('tabla')
    <div class="tabla_usuarios">
        <h1>Usuarios</h1>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Role</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>

            @foreach($usuarios as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href="#"><img src="/img/edit_icon_admin.png"></a></td>
                    <td><a href=""><img src="/img/delete_icon_admin.png"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
<?php
//<a href="{{route('profile', ['id' => 1])}}">login here</a>
?>