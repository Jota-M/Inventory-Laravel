<?php
$configData = Helper::appClasses();
?>

<?php $__env->startSection('title', 'Backups:'); ?>

<?php $__env->startSection('content'); ?>
<h4>Backups del sistema</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-backups-create')); ?>" class="btn btn-primary">Crear nuevo Backup</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Estado</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($backup->id); ?></td>
          <td><?php echo e($backup->status); ?></td>
          <td><?php echo e($backup->created_at); ?></td>
          <td>
            <a href="<?php echo e(route('pages-backups-download', $backup->name)); ?>">Dowloand</a> | <a href="<?php echo e(route('pages-backups-destroy', $backup->id)); ?>">Borrar</a> </td> 
        </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/backups.blade.php ENDPATH**/ ?>