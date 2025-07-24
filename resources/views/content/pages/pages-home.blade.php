@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard Inventario')

@section('vendor-style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section('vendor-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('content')
<div class="container-fluid py-4">

  <h2 class="mb-4 text-center fw-bold text-primary">Panel de Control - Inventario</h2>

  <div class="row">
  <!-- Estadísticas básicas (igual que antes) -->
   <div class="row">
  
  <!-- Primera tarjeta: Sistemas -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Sistemas" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-edit fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Productos</span>
        <h2 class="mb-0">{{$n_materiales}}</h2>
      </div>
    </div>
  </div>

  <!-- Segunda tarjeta: Tipos -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Tipos" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-dock-top fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Tipo de Productos</span>
        <h2 class="mb-0">{{$n_types}}</h2>
      </div>
    </div>
  </div>

  <!-- Tercera tarjeta: Dispositivos (ajustada) -->
  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Dispositivos" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-message-square-detail fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Proveedores</span>
        <h2 class="mb-0">{{$n_proveedores}}</h2>
      </div>
    </div>
  </div>

  <!-- Cuarta tarjeta: Reportes -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Reportes" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Reportes</span>
        <h2 class="mb-0">{{$n_reports}}</h2>
      </div>
    </div>
  </div>

  <!-- Quinta tarjeta: Backups -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Backups" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-purchase-tag fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Backups</span>
        <h2 class="mb-0">{{$n_backups}}</h2>
      </div>
    </div>
  </div>
  <!-- ... tus tarjetas ... -->

  <!-- Materiales con bajo stock -->
  <div class="col-12 col-md-6 mb-4">
    <div class="card">
      <div class="card-header">Materiales con bajo stock</div>
      <div class="card-body">
        <ul>
          @forelse ($lowStockMaterials as $material)
            <li><strong>{{ $material->name }}</strong> ({{ $material->code }}) - Stock: {{ $material->stock }}</li>
          @empty
            <li>No hay materiales con bajo stock.</li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>

  <!-- Proveedores con más materiales -->
  <div class="col-12 col-md-6 mb-4">
    <div class="card">
      <div class="card-header">Top proveedores por materiales activos</div>
      <div class="card-body">
        <ul>
          @forelse ($topSuppliers as $supplier)
            <li>{{ $supplier->name }} - Materiales activos: {{ $supplier->active_materials_count }}</li>
          @empty
            <li>No hay proveedores activos.</li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>

  <!-- Tipos con mayor stock -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header">Tipos con mayor stock total</div>
      <div class="card-body">
        <ul>
          @forelse ($topTypes as $type)
            <li>{{ $type->name }} - Stock total: {{ $type->total_stock ?? 0 }}</li>
          @empty
            <li>No hay tipos activos.</li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>

  <!-- Últimos movimientos de salida -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header">Últimos movimientos de salida</div>
      <div class="card-body">
        <ul>
          @forelse ($recentOutputs as $output)
            <li>{{ $output->name }} - Cantidad: {{ $output->quantity }} - Fecha: {{ $output->created_at }}</li>
          @empty
            <li>No hay movimientos recientes.</li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>


</div>

@endsection