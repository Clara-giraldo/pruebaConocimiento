{{-- para conectar con la página de la plantilla --}}
@extends('layout/plantilla')

{{-- Para agregar las secciones que se crearon en la platilla --}}
@section('tituloPagina','Noticias')
@include('layout.nav')
@section('contenido')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
  @endsection
