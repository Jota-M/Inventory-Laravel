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
    <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creando un nuevo proveedor</h5>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo e(route('pages-supliers-store')); ?>">
            <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Nombre de la Empresa</label>
            <input type="text" name="name_company" class="form-control" id="basic-default-email" placeholder="" required/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Nombre</label>
            <input type="text" name="name" class="form-control" id="basic-default-email" placeholder="" required/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Apellido Paterno</label>
            <input type="text" name="lastname_p" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Apellido Materno</label>
            <input type="text" name="lastname_m" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Email</label>
            <input type="email" name="email" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons"> Telefono</label>
            <input type="number" name="telf" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Direccion</label>
            <input type="text" name="address" class="form-control" id="basic-default-email" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">Ciudad</label>
            <input type="text" name="city" class="form-control" id="basic-default-email" placeholder="" />
          </div>          
          <div class="mb-3">
            <label class="form-label" for="selectpickerIcons">NIT</label>
            <input type="text" name="nit" class="form-control" id="basic-default-email" placeholder="" />
          </div>          
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/suppliers-create.blade.php ENDPATH**/ ?>