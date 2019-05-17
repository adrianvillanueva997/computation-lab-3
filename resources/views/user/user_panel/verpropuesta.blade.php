@extends('user.user_panel.index')
@section('contenido')
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <h2>Aquí estan tus propuestas:</h2>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propuestas as $propuesta)
                            <tr>
                                <td>{!! $propuesta->id !!}</td>
                                <td>{!! $propuesta->name !!}</td>
                                <td>{!! $propuesta->description !!}</td>
                                <td>{!! $propuesta->tags !!}</td>
                                <td><a href="/formulariomodificacion_propuesta/{{$propuesta->id}}" class="btn btn-primary">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    </div>
@endsection