  <?php
  $configData = Helper::appClasses();
  ?>

  

  <?php $__env->startSection('title', 'Modificando equipos'); ?>

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
          <h5 class="mb-0">Modificacion de materiales</h5> 
        </div>
        <div class="card-body">
          <form method="post" action="<?php echo e(route('pages-materials-update')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="material_id" value="<?php echo e($material->id); ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Tipo de Material</label>
              <select name="type_id" class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                <?php $__empty_1 = true; $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option data-icon="bx bx-<?php echo e($type->icon); ?>" <?php if($type->id==$material->type_id): ?> selected <?php endif; ?> value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Proveedor</label>
              <select name="supplier_id" class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                <?php $__empty_1 = true; $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $so): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($so->id); ?>" <?php if($so->id==$material->sos_id): ?> selected <?php endif; ?>><?php echo e($so->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Codigo</label>
              <input type="text" name="code" class="form-control" id="basic-default-email" placeholder="" value="<?php echo e($material->code); ?>" required/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Nombre</label>
              <input type="text" name="name" class="form-control" id="basic-default-email" placeholder="" required value="<?php echo e($material->name); ?>"/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Imagen</label>
              <input type="file" name="fileLogo" class="form-control" id="basic-default-fullname"/>
              <img src="<?php echo e($material->image_url); ?>" alt="" style="width:20%;">
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Descripcion</label>
              <input type="text" name="description" class="form-control" id="basic-default-email" placeholder="" value="<?php echo e($material->description); ?>"/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Cantidad</label>
              <input type="text" name="stock" class="form-control" id="basic-default-email" placeholder="" value="<?php echo e($material->stock); ?>"/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Fecha Ingreso</label>
              <input type="date" name="fecha_ing" class="form-control" id="basic-default-email" placeholder="" value="<?php echo e($material->fecha_ing); ?>"/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="selectpickerIcons">Responsable</label>
              <input type="text" name="responsable" class="form-control" id="basic-default-email" placeholder="" value="<?php echo e($material->reponsable); ?>"/>
            </div>          
            <button type="submit" class="btn btn-primary">Send</button>
            
          </form>
        </div>
      </div>
      </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/materials-show.blade.php ENDPATH**/ ?>