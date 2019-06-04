@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(Auth::user()->isAdmin())
                            <a href="/admin_home">Hola</a>
                            You are logged in!
                        @else
                        <a href="/user_home">Hola usuario</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
