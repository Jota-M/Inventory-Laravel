<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Salidas de Materiales'); ?>

<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12 mb-3 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold">Historial de salidas</h4>
    <a href="<?php echo e(route('pages-material-outputs-create')); ?>" class="btn btn-primary">Registrar salida</a>
  </div>

  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
  <?php endif; ?>

  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-hover table-bordered" id="outputsTable">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Material</th>
              <th>Código</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              <th>Entregado a</th>
              <th>Responsable</th>
              <th>Motivo</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $outputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($output->id); ?></td>
                <td><?php echo e($output->material->name ?? 'N/A'); ?></td>
                <td><?php echo e($output->material->code ?? 'N/A'); ?></td>
                <td><?php echo e($output->quantity); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($output->date)->format('d/m/Y')); ?></td>
                <td><?php echo e($output->delivered_to ?? '-'); ?></td>
                <td><?php echo e($output->responsible ?? '-'); ?></td>
                <td><?php echo e($output->reason ?? '-'); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

      <div class="card-footer">
        <?php echo e($outputs->links()); ?>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script>
  // Inicializar tabla si se desea usar DataTables
  document.addEventListener('DOMContentLoaded', function () {
    const table = document.querySelector('#outputsTable');
    if (table) {
      new DataTable(table);
    }
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/material_outputs/index.blade.php ENDPATH**/ ?>