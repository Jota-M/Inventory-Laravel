<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Proveedores</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
        .logo { width: 80px; }
    </style>
</head>
<body>
    <div style="text-align: center;">
      <img src="https://www.aapospotosi.com/gallery_gen/f3ac9540887267a1d14a013defd46ca0_910x704_fit.png" class="logo" alt="Logo">
      <h3>Administración Autónoma para Obras Sanitarias - POTOSÍ</h3>
      <h1>Reporte de Proveedores</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>NIT</th>
                <th>Estado</th>
                <th>Fecha de creación</th>
                <th>Última actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }} {{ $s->lastname_p }} {{ $s->lastname_m }}</td>
                    <td>{{ $s->name_company }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->telf }}</td>
                    <td>{{ $s->address }}</td>
                    <td>{{ $s->city }}</td>
                    <td>{{ $s->nit }}</td>
                    <td>{{ $s->active ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $s->created_at }}</td>
                    <td>{{ $s->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
