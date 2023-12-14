@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Usuarios')

@section('content')
<h4>Usuarios de la aplicacion</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <a href="{{ route('pages-users-create') }}"class="btn btn-primary">Añadir nuevo usuario</a>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Fecha creacion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td><a href="{{route('pages-users-show', $user->id) }}" >Editar </a> | <a href="{{route('pages-users-destroy', $user->id) }}">Borrar</td>
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection

