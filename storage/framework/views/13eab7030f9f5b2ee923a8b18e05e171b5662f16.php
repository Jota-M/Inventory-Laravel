<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Registrar Salida de Material'); ?>

<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('.selectpicker').select2({
      placeholder: 'Seleccione una opción',
      width: '100%'
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12 mb-4">
    <h4 class="fw-bold">Registrar nueva salida</h4>
    <a href="<?php echo e(route('pages-material-outputs')); ?>" class="btn btn-secondary mt-2">← Volver al listado</a>
  </div>

  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <strong>¡Ups! Hubo algunos errores.</strong>
      <ul class="mb-0 mt-2">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo e(route('pages-material-outputs-store')); ?>" method="POST">
          <?php echo csrf_field(); ?>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="material_id" class="form-label">Material</label>
              <select name="material_id" id="material_id" class="form-control selectpicker" required>
                <option value="">Seleccione un material</option>
                <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($material->id); ?>"><?php echo e($material->name); ?> (<?php echo e($material->code); ?>)</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="col-md-3">
              <label for="quantity" class="form-label">Cantidad</label>
              <input type="number" min="1" name="quantity" id="quantity" class="form-control" required>
            </div>

            <div class="col-md-3">
              <label for="date" class="form-label">Fecha</label>
              <input type="date" name="date" id="date" class="form-control" value="<?php echo e(now()->format('Y-m-d')); ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-4">
              <label for="delivered_to" class="form-label">Entregado a</label>
              <input type="text" name="delivered_to" id="delivered_to" class="form-control">
            </div>

            <div class="col-md-4">
              <label for="responsible" class="form-label">Responsable</label>
              <input type="text" name="responsible" id="responsible" class="form-control">
            </div>

            <div class="col-md-4">
              <label for="reason" class="form-label">Motivo</label>
              <input type="text" name="reason" id="reason" class="form-control">
            </div>
          </div>

          <div class="mt-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Registrar salida</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/material_outputs/create.blade.php ENDPATH**/ ?>