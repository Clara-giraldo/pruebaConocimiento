{{-- para conectar con la página de la plantilla --}}
@extends('layout/plantilla')

{{-- Para agregar las secciones que se crearon en la platilla --}}
@section('tituloPagina','NewHub')
@include('layout.nav')

{{-- Para agregar la seccion de contenido se adiciona @section y el  @endsection en medio se adiciona el contenido--}}

@section('contenido')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
<div class="card">
    <h5 class="card-header">Ingresar</h5>
    <div class="card-body">
        <p class="card-text">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="emal" class="form-label">Usuario</label>
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="tPassword" class="form-label">Contraseña</label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    <a href="{{ route("usuarios.create")}}" class="btn btn-secondary">
                        <span class="fas fa-user-plus"> </span> Agregar nueva Persona
                    </a>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection

