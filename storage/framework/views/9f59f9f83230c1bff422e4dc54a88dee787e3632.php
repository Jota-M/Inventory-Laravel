<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Materiales'); ?>

<?php $__env->startSection('content'); ?>


<h4>Materiales</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-materials-create')); ?>" class="btn btn-primary">Anadir un nuevo Material</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tipo</th>
          <th>Cajero</th>          
          <th>Nombre Producto</th>
          <th>Descripcion</th>          
          <th>Activo</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($material->id); ?></td>
          <td >
          <?php if($material->type && $material->type->icon): ?>
                <span class="badge bg-primary"><i class="<?php echo e($material->type->icon); ?>"></i></span>
            <?php else: ?>
                No hay ícono asociado
            <?php endif; ?>
        </td>
        <td>Jose</td>
        <td><?php echo e($material->name); ?></td>
        <td><?php echo e($material->description); ?></td>
          <td>
            <?php if($material->active): ?>
            <a href="<?php echo e(route ('pages-materials-switch',$material->id)); ?>">
              <span class="badge bg-primary">Activo</span>
            </a>
            <?php else: ?>
            <a href="<?php echo e(route ('pages-materials-switch',$material->id)); ?>">
              <span class="badge bg-danger">Inactivo</span>
            </a>
            <?php endif; ?>
          </td>
          <td><?php echo e($material->created_at); ?></td>
          <td><a href="<?php echo e(route('pages-materials-show', $material->id)); ?>">Editar</a> | <a href="<?php echo e(route('pages-materials-destroy', $material->id)); ?>">Borrar</a></td>
        </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 
<!--/ Basic Bootstrap Table -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/materials-list.blade.php ENDPATH**/ ?>