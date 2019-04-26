@extends('user.user_panel.index')

@section('contenido')
<div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <form>
                        <div class="form-group">
                            <label for="nombre_propuesta">Nombre de propuesta</label>
                            <input type="text" class="form-control" id="nombre_propuesta" placeholder="Propuesta">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripcion propuesta</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="cargar_imagen">Cargar imagen/es</label>
                        <input type="file" class="form-control-file" id="cargar_imagen">
                        </div>
                        <div class="form-group">
                            <label for="etiquetas">Etiquetas (separadas por comas)</label>
                            <input type="text" class="form-control" id="etiquetas" placeholder="Etiquetas">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Aceptar</button>
                    </form>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>

@endsection