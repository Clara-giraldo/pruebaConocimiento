{{-- para conectar con la página de la plantilla --}}
@extends('layout/plantilla')

{{-- Para agregar las secciones que se crearon en la platilla --}}
@section('tituloPagina','Crear nuevo usuario')
@include('layout.nav')
@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo usuario</h5>
    <div class="card-body">
      <p class="card-text">
        <form action=" {{ route('usuarios.store')}}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Ingrese nombre completo" required>
            <label for="">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" placeholder="Ingrese correo electrónico." required>
            <label for="">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña" required>
            <br>
            <a href="{{route('home')}}" class="btn btn-info">
                <span class="fas fa-undo"></span>
                Regresar</a>
            <button class="btn btn-primary">
                <span class="fas fa-user-plus"></span>
                Agregar
            </button>
        </form>
      </p>
    </div>
  </div>
  @endsection
