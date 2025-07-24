<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Materiales</title>
  <style>
    body { font-family: Arial, sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 10px; }
    th, td { border: 1px solid #444; padding: 6px; text-align: left; }
    th { background-color: #f2f2f2; }
    h1, h3 { text-align: center; margin: 4px; }
    .logo { width: 80px; }
  </style>
</head>
<body>
  <div style="text-align: center;">
    <img src="https://www.aapospotosi.com/gallery_gen/f3ac9540887267a1d14a013defd46ca0_910x704_fit.png" class="logo" alt="Logo">
    <h1>Reporte de Materiales</h1>
    <h3>Administración Autónoma para Obras Sanitarias - POTOSÍ</h3>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Tipo</th>
        <th>Proveedor</th>
        <th>Stock</th>
        <th>Estado</th>
        <th>Fecha ingreso</th>
      </tr>
    </thead>
    <tbody>
      @foreach($materials as $material)
      <tr>
        <td>{{ $material->id }}</td>
        <td>{{ $material->name }}</td>
        <td>{{ $material->description }}</td>
        <td>{{ $material->type->name ?? '-' }}</td>
        <td>{{ $material->supplier->name ?? '-' }}</td>
        <td>{{ $material->stock }}</td>
        <td>{{ $material->active ? 'Activo' : 'Inactivo' }}</td>
        <td>{{ \Carbon\Carbon::parse($material->fecha_ing)->format('d/m/Y') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
