{{-- para conectar con la página de la plantilla --}}
@extends('layout/plantilla')

{{-- Para agregar las secciones que se crearon en la platilla --}}
@section('tituloPagina','Noticias')
@include('layout.nav')
@section('contenido')
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <i class="far fa-thumbs-up"></i>
            <small class="text-muted">Last updated 3 mins ago</small>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar un comentario"></textarea>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <i class="far fa-thumbs-up"></i>
          <small class="text-muted">Last updated 3 mins ago</small>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar un comentario"></textarea>
          </div>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <i class="far fa-thumbs-up"></i>
          <small class="text-muted">Last updated 3 mins ago</small>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar un comentario"></textarea>
        </div>
      </div>
    </div>
  </div>
  @endsection
