@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Registrar Salida de Material')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('.selectpicker').select2({
      placeholder: 'Seleccione una opción',
      width: '100%'
    });
  });
</script>
@endsection

@section('content')
<div class="row">
  <div class="col-12 mb-4">
    <h4 class="fw-bold">Registrar nueva salida</h4>
    <a href="{{ route('pages-material-outputs') }}" class="btn btn-secondary mt-2">← Volver al listado</a>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <strong>¡Ups! Hubo algunos errores.</strong>
      <ul class="mb-0 mt-2">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('pages-material-outputs-store') }}" method="POST">
          @csrf

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="material_id" class="form-label">Material</label>
              <select name="material_id" id="material_id" class="form-control selectpicker" required>
                <option value="">Seleccione un material</option>
                @foreach ($materials as $material)
                  <option value="{{ $material->id }}">{{ $material->name }} ({{ $material->code }})</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-3">
              <label for="quantity" class="form-label">Cantidad</label>
              <input type="number" min="1" name="quantity" id="quantity" class="form-control" required>
            </div>

            <div class="col-md-3">
              <label for="date" class="form-label">Fecha</label>
              <input type="date" name="date" id="date" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-4">
              <label for="delivered_to" class="form-label">Entregado a</label>
              <input type="text" name="delivered_to" id="delivered_to" class="form-control">
            </div>

            <div class="col-md-4">
              <label for="responsible" class="form-label">Responsable</label>
              <input type="text" name="responsible" id="responsible" class="form-control">
            </div>

            <div class="col-md-4">
              <label for="reason" class="form-label">Motivo</label>
              <input type="text" name="reason" id="reason" class="form-control">
            </div>
          </div>

          <div class="mt-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Registrar salida</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
