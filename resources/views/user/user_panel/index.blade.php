@extends('layouts.app')

@section('content')
<div class="container">
      <!-- Sidebar -->
      <div class="row">
        <div class="col-md-3">
        <div class="card"><div class="card-body"><div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Menú de Usuario</div>
              <div class="list-group list-group-flush">
                <a href="/crear_propuesta" class="list-group-item list-group-item-action bg-light">Nueva Propuesta</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Mensajes</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Mensajes</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Reportes</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-light">Ajustes</a>
              </div>
          </div>
        </div>
      </div>
    </div>
          
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                  @yield('contenido')
                </div>
              </div>
        </div>
      </div>

</div>
@endsection