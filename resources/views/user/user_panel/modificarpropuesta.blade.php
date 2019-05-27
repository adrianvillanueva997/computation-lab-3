@extends('user.user_panel.index')
@section('contenido')
<div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <form action="/updatepropuesta/{{$propuesta->id}}" method="POST">
            {{csrf_field()}}
                        <div class="form-group">
                            <label for="nombre_propuesta">Nombre de propuesta</label>
                            <input type="text" class="form-control" name="name" value="{{$propuesta->name}}" id="nombre_propuesta" placeholder="Propuesta">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Pequeña descripcion</label>
                            <textarea class="form-control" name="small_description" id="small_descripcion" rows="3">{{$propuesta->small_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion propuesta</label>
                            <textarea class="form-control" name="description" id="descripcion" rows="3">{{$propuesta->description}}</textarea>
                        </div>
                        <div class="form-group">
                        <label for="cargar_imagen">Cargar imagen/es</label>
                        <input type="file" class="form-control-file" id="cargar_imagen">
                        </div>
                        <div class="form-group">
                            <label for="etiquetas">Etiquetas (separadas por comas)</label>
                            <input type="text" class="form-control" name="tags" value="{{$propuesta->tags}}" id="etiquetas" placeholder="Etiquetas">
                        </div>
                        <div class="form-group">
                            <label for="etiquetas">Coste de la propuesta</label>
                            <input type="text" class="form-control" name="coste" value="{{$propuesta->coste}}" id="coste" placeholder="coste">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Detalles de la propuesta</label>
                            <textarea class="form-control" name="detalles_propuesta" id="detalles_propuesta" rows="3">{{$propuesta->detalles_pedido}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Aceptar</button>
            </form>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

@endsection