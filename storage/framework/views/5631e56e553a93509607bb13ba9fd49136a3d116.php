<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de MATERIALES</title>
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 2px solid #333;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #333;
            border-right: 2px solid #333;
            font-family: Arial, sans-serif;
        }

        th {
            background-color: #666;
            color: #fff;
        }

        /* Estilo para las filas pares */
        tr:nth-child(even) {
            background-color: #ddd;
        }

        /* Estilo para las filas impares */
        tr:nth-child(odd) {
            background-color: #fff;
        }
        .head{
            background-color:red;
        }
    </style>
</head>
<body>
<div style="display:flex; align-items:center; justify-content:center;">
<img src="https://www.aapospotosi.com/gallery_gen/f3ac9540887267a1d14a013defd46ca0_910x704_fit.png" style="width:7em; position:absolute" alt="Logo">        
<h1 style="text-align:center;margin:5px;paddign:5px">Reporte de Materiales</h1>
<h3 style="text-align:center;margin:0px;paddign:0px">Administracion Autonoma para Obras Sanitarias </h3>
<h3 style="text-align:center;margin:0px;paddign:0px">POTOSI</h3>
    
</div>


<table class="table">
    <thead class="head">
        <tr>
        <td><b>ID</b></td> 
        <td><b>Nombre</b></td> 
        <td><b>Descripcion</b></td> 
        <td><b>Estado</b></td> 
        <td><b>Serial Number</b></td>
        <td><b>Fecha de creacion</b></td>
        <td><b>Fecha de actualizacion<b></td>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($material->id); ?></td>
                <td><?php echo e($material->name); ?></td>
                <td><?php echo e($material->description); ?></td>
                <td><?php echo e($material->status); ?></td>
                <td><?php echo e($material->serial_number); ?></td>
                <td><?php echo e($material->created_at); ?></td>
                <td><?php echo e($material->updated_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/pdf/materials.blade.php ENDPATH**/ ?>