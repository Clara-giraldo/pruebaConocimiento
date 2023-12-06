{{-- para conectar con la página de la plantilla --}}
@extends('layout/plantilla')

{{-- Para agregar las secciones que se crearon en la platilla --}}
@section('tituloPagina','NewHub')

{{-- Para agregar la seccion de contenido se adiciona @section y el  @endsection en medio se adiciona el contenido--}}

@section('contenido')
<div class="card">
    <h5 class="card-header">Ingresar</h5>
    <div class="card-body">
        <p class="card-text">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="emal" class="form-label">Usuario</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese el usuario registrado." required>
                </div>
                <div class="mb-3">
                    <label for="tPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="Password" required>
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

