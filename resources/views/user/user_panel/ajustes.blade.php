@extends('user.user_panel.index')
@section('contenido')
<div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <form action="/updateuser" method="POST">
            {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Nombre de usuario</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" id="name" placeholder="User">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" id="email" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="text" class="form-control" name="age" value="{{$user->age}}" id="age" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="origen">Origen</label>
                            <input type="text" class="form-control" name="origen" value="{{$user->origen}}" id="origen" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="ocupation">Ocupacion</label>
                            <input type="text" class="form-control" name="ocupation" value="{{$user->ocupation}}" id="ocupation" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="habilities">Habilidades</label>
                            <input type="text" class="form-control" name="habilities" value="{{$user->habilities}}" id="habilities" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripcion</label>
                            <input type="text" class="form-control" name="description" value="{{$user->description}}" id="description" placeholder="user">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Aceptar</button>
            </form>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>



@endsection