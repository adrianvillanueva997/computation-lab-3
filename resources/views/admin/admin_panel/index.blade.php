@extends('layouts.app')
@include('admin.admin_panel.panel_usuarios')
@include('admin.admin_panel.panel_propuestas')
@include('admin.menu_admin')
@section('content')
    <div class="container">
        <!-- Sidebar -->
        <div class="row">
            <div class="col-md-3">
                @yield('menu_admin')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        @yield('tabla_usuarios')
                        @yield('tabla_propuestas')
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection