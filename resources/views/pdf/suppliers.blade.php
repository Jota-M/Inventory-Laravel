<h1>Proveedores</h1>
<table class="table">
    <thead>
        <tr>
        <td>ID</td> 
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Estado</td>
        <td>Serial Number</td>
        <td>Fecha de creacion</td>
        <td>Fecha de actualizacion</td>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{$supplier->id}}</td>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->description}}</td>
                <td>{{$supplier->status}}</td>
                <td>{{$supplier->serial_number}}</td>
                <td>{{$supplier->created_at}}</td>
                <td>{{$supplier->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>