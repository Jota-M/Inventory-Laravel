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
    </style>
</head>
<body>
    <h1>Reporte de Proveedores</h1>
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
            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($s->id); ?></td>
                    <td><?php echo e($s->name); ?> <?php echo e($s->lastname_p); ?> <?php echo e($s->lastname_m); ?></td>
                    <td><?php echo e($s->name_company); ?></td>
                    <td><?php echo e($s->email); ?></td>
                    <td><?php echo e($s->telf); ?></td>
                    <td><?php echo e($s->address); ?></td>
                    <td><?php echo e($s->city); ?></td>
                    <td><?php echo e($s->nit); ?></td>
                    <td><?php echo e($s->active ? 'Activo' : 'Inactivo'); ?></td>
                    <td><?php echo e($s->created_at); ?></td>
                    <td><?php echo e($s->updated_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/pdf/suppliers.blade.php ENDPATH**/ ?>