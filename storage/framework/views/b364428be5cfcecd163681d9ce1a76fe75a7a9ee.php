<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Reportes en pdf'); ?>

<?php $__env->startSection('content'); ?>
<h4>Reportes</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-reports-M-create')); ?>" class="btn btn-primary">Crear nuevo reporte de Materiales
    </a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Creado en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($report->id); ?></td>
          
          <td><?php echo e($report->created_at); ?></td>
          <td>
            <a href="<?php echo e(route('pages-reports-M-download', $report->url)); ?>">Dowloand</a> | <a href="<?php echo e(route('pages-reports-M-destroy', $report->id)); ?>">Borrar</a> </td> 
        </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 
<!--/ Basic Bootstrap Table -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/reports-M.blade.php ENDPATH**/ ?>