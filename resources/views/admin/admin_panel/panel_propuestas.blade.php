@section('tabla_propuestas')
    <div class="tabla_propuestas">
        <h1>Propuestas</h1>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Creado</th>
                <th>Última modificación</th>
                <th>Nombre</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
            @foreach($propuestas as $propuesta)

                <tr>
                    <td>{{$propuesta->id}}</td>
                    <td>{{$propuesta->id_user}}</td>
                    <td>{{$propuesta->created_at}}</td>
                    <td>{{$propuesta->updated_at}}</td>
                    <td>{{$propuesta->name}}</td>
                    <td><a href="/editar_propuesta/{{$propuesta->id}}"><img src="/img/edit_icon_admin.png" alt="Editar"></a></td>
                    <td><a href="eliminar_propuesta/{{$propuesta->id}}"><img src="/img/delete_icon_admin.png" alt="Eliminar"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
<?php
//<a href="{{route('profile', ['id' => 1])}}">login here</a>
?>