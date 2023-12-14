@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Creando usuario nuevo')

@section('content')
<div class="row">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creando un usuario nuevo</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('pages-users-store') }}"> 
          @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nombre Completo</label>
            <input type="text" name="name"class="form-control" id="basic-default-fullname" placeholder="Slendy Cortes" required />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">email</label>
            <input type="text" name="email"class="form-control" id="basic-default-email" placeholder="example@example.com."required />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Password</label>
            <input type="Password" name="password"class="form-control" id="basic-default-password" placeholder="Secret Password."required />
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
@endsection