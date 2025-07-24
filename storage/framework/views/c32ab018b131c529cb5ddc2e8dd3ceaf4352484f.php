<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Proveedores'); ?>

<?php $__env->startSection('content'); ?>
<h4>Proveedores</h4>
<div class="card">
  <h5 class="card-header">Proveedores</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-supliers-create')); ?>" class="btn btn-primary">Anadir un nuevo proveedor</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Ciudad</th>
          <th>Activo</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <?php $__currentLoopData = $supliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($suplier->id); ?></td>
          <td><?php echo e($suplier->name); ?></td>
          <td><?php echo e($suplier->city); ?></td>
          <td>
            <?php if($suplier->active): ?>
            <a href="<?php echo e(route ('pages-supliers-switch',$suplier->id)); ?>">
              <span class="badge bg-primary">Activo</span>
            </a>
            <?php else: ?>
            <a href="<?php echo e(route ('pages-supliers-switch',$suplier->id)); ?>">
              <span class="badge bg-danger">Inactivo</span>
            </a>
            <?php endif; ?>
          </td>
          <td><?php echo e($suplier->created_at); ?></td>
          <td><a href="<?php echo e(route('pages-supliers-show', $suplier->id)); ?>">
            <span class="badge bg-success">Editar</span>
          </a> | <a href="<?php echo e(route('pages-supliers-destroy', $suplier->id)); ?>">
            <span class="badge bg-danger">Borrar</span>
          </a></td>
        </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/suppliers.blade.php ENDPATH**/ ?>