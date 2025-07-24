<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Creando tipo equipo'); ?>

<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/tagify/tagify.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/tagify/tagify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/bloodhound/bloodhound.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('assets/js/forms-selects.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/forms-tagify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/forms-typeahead.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
    <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creando un nuevo material</h5> 
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo e(route('pages-materials-store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Tipo de material</label>
            <select name="type_id" class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
              <?php $__empty_1 = true; $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <option data-icon="bx bx-<?php echo e($type->icon); ?>"value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Proveedor</label>
            <select name="supplier_id" class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
              <?php $__empty_1 = true; $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Codigo</label>
            <input type="text" name="code" class="form-control" id="basic-default-email" placeholder="" required/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Nombre</label>
            <input type="text" name="name" class="form-control" id="basic-default-email" placeholder="" required/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Imagen</label>
            <input type="file" name="image_url" class="form-control" id="basic-default-email" placeholder="" required/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Descripcion</label>
            <input type="text" name="description" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Cantidad</label>
            <input type="text" name="stock" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Fecha Ingreso</label>
            <input type="date" name="fecha_ing" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Responsable</label>
            <input type="text" name="responsable" class="form-control" id="basic-default-email" placeholder="" />
          </div>          
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/materials-create.blade.php ENDPATH**/ ?>