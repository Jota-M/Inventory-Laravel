<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Tipos'); ?>

<?php $__env->startSection('content'); ?>
<h4>Tipos de Materiales</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-types-create')); ?>" class="btn btn-primary">Anadir un nuevo tipo</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Activo</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($type->id); ?></td>
          <td><?php echo e($type->name); ?></td>
          <td>
            <?php if($type->active): ?>
            <a href="<?php echo e(route ('pages-types-switch',$type->id)); ?>">
              <span class="badge bg-primary">Activo</span>
            </a>
            <?php else: ?>
            <a href="<?php echo e(route ('pages-types-switch',$type->id)); ?>">
              <span class="badge bg-danger">Inactivo</span>
            </a>
            <?php endif; ?>
          </td>
          <td><?php echo e($type->created_at); ?></td>
          <td><a href="<?php echo e(route('pages-types-show', $type->id)); ?>">Editar</a> | <a href="<?php echo e(route('pages-types-destroy', $type->id)); ?>">Borrar</a></td>
        </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 
<!--/ Basic Bootstrap Table -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/types.blade.php ENDPATH**/ ?>