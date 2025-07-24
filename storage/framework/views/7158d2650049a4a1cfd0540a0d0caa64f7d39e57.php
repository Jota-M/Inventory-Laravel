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
        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($supplier->id); ?></td>
                <td><?php echo e($supplier->name); ?></td>
                <td><?php echo e($supplier->description); ?></td>
                <td><?php echo e($supplier->status); ?></td>
                <td><?php echo e($supplier->serial_number); ?></td>
                <td><?php echo e($supplier->created_at); ?></td>
                <td><?php echo e($supplier->updated_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/pdf/suppliers.blade.php ENDPATH**/ ?>