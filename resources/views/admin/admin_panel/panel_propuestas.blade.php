@section('tabla_propuestas')
    <div class="tabla_propuestas">
        <h1>Propuestas</h1>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Tags</th>
                <th>Creado</th>
                <th>Última modificación</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
            @for($i=0;$i<$propuestas;$i++)
                <tr>
                    <td>asdasda</td>
                    <td><a href="#"><img src="/img/edit_icon_admin.png"></a></td>
                    <td><a href=""><img src="/img/delete_icon_admin.png"></a></td>
                </tr>
            @endfor
        </table>
    </div>
@endsection
<?php
//<a href="{{route('profile', ['id' => 1])}}">login here</a>
?>