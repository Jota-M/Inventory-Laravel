@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tipos')

@section('content')
<h4>Tipos de Materiales</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <a href="{{route('pages-types-create')}}" class="btn btn-primary">Anadir un nuevo tipo</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Icon</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Activo</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($types as $type)  
        <tr>
          <td>{{$type->id}}</td>
          <td><span class="badge bg-primary"><i class="{{$type->icon}}"></i></span></td>
          <td>{{$type->name}}</td>
          <td>{{$type->description}}</td>
          <td>
            @if($type->active)
            <a href="{{ route ('pages-types-switch',$type->id)}}">
              <span class="badge bg-primary">Activo</span>
            </a>
            @else
            <a href="{{ route ('pages-types-switch',$type->id)}}">
              <span class="badge bg-danger">Inactivo</span>
            </a>
            @endif
          </td>
          <td>{{$type->created_at}}</td>
          <td><a href="{{route('pages-types-show', $type->id)}}">Editar</a> | <a href="{{route('pages-types-destroy', $type->id)}}">Borrar</a></td>
        </tr>  
    @endforeach
      </tbody>
    </table>
  </div>
</div> 
<!--/ Basic Bootstrap Table -->
@endsection
