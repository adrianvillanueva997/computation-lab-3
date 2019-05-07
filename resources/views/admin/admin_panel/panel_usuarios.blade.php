@section('tabla')
    <div class="tabla_usuarios">
        <p>esto es un test</p>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>

            <tr>
                @foreach($usuarios as $user)
                @endforeach
                <td>1</td>
                <td>Adrian</td>
                <td>adriango@gmail.com</td>
            </tr>
            <tr>
                <td>February</td>
                <td>$50</td>
            </tr>
        </table>
    </div>
@endsection
