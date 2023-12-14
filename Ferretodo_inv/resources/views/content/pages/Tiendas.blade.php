@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tienda Origen')

@section('content')
<h4>Tienda Origen</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <a href="{{ route('pages-origins-create') }}"class="btn btn-primary">Añadir nueva Tienda</a>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Descripcion</th>
          <th>Activo</th>
          <th>Fecha creacion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($origins as $origin)
            <tr>
            <td>{{$origin->id}}</td>
            <td>{{$origin->name}}</td>
            <td>{{$origin->Descripcion}}</td>
            <td>
              @if($origin->active)
              <a href="{{route('pages-origins-switch',$origin->id)}}">
              <span class="badge bg-primary">Activo</span></a>
              @else
              <a href="{{route('pages-origins-switch',$origin->id)}}">
              <span class="badge bg-danger">Inactivo</span></a>

              @endif
            </td>
            <td>{{$origin->created_at}}</td>
            <td><a href="{{route('pages-origins-show', $origin->id) }}" >Editar </a> | <a href="{{route('pages-origins-destroy', $torigin->id) }}">Borrar</td>
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection