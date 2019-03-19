@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header"> Bienvenido - Sistema de gestión de incidencias</div>

            <div class="card-body">
                @if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    @endif
@endsection