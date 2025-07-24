<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Reporte Avanzado de Tipos de Material</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        th { background-color: #ccc; }
        h1 { text-align: center; }
        .logo { width: 80px; }
    </style>
</head>
<body>
    <div style="text-align: center;">
      <img src="https://www.aapospotosi.com/gallery_gen/f3ac9540887267a1d14a013defd46ca0_910x704_fit.png" class="logo" alt="Logo">
      <h3>Administración Autónoma para Obras Sanitarias - POTOSÍ</h3>
      <h1>Reporte Avanzado de Tipos de Material</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Icono</th>
                <th>Total Materiales Activos</th>
                <th>Suma de Stock</th>
                <th>Última Fecha de Ingreso</th>
                <th>Proveedores Distintos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>{{ $type->description }}</td>
                <td>{{ $type->active ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $type->icon ?? '-' }}</td>
                <td>{{ $type->total_materials ?? 0 }}</td>
                <td>{{ $type->total_stock ?? 0 }}</td>
                <td>{{ $type->last_ingreso ?? 'N/A' }}</td>
                <td>{{ $type->unique_suppliers_count ?? 0 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
