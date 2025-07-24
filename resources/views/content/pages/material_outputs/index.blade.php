@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Salidas de Materiales')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-12 mb-3 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold">Historial de salidas</h4>
    <a href="{{ route('pages-material-outputs-create') }}" class="btn btn-primary">Registrar salida</a>
  </div>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-hover table-bordered" id="outputsTable">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Material</th>
              <th>Código</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              <th>Entregado a</th>
              <th>Responsable</th>
              <th>Motivo</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($outputs as $output)
              <tr>
                <td>{{ $output->id }}</td>
                <td>{{ $output->material->name ?? 'N/A' }}</td>
                <td>{{ $output->material->code ?? 'N/A' }}</td>
                <td>{{ $output->quantity }}</td>
                <td>{{ \Carbon\Carbon::parse($output->date)->format('d/m/Y') }}</td>
                <td>{{ $output->delivered_to ?? '-' }}</td>
                <td>{{ $output->responsible ?? '-' }}</td>
                <td>{{ $output->reason ?? '-' }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="card-footer">
        {{ $outputs->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

@section('page-script')
<script>
  // Inicializar tabla si se desea usar DataTables
  document.addEventListener('DOMContentLoaded', function () {
    const table = document.querySelector('#outputsTable');
    if (table) {
      new DataTable(table);
    }
  });
</script>
@endsection
