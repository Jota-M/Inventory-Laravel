<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Creando usuario nuevo'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creando un nuevo usuario</h5> 
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo e(route('pages-users-update')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nombre Completo</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" id="basic-default-fullname" placeholder="John Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>"id="basic-default-email" placeholder="example@gmail.com" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Password Nuevo</label>
            <input type="password" name="new_password" class="form-control" id="basic-default-password" placeholder="Secret password" />
          </div>          
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/users-show.blade.php ENDPATH**/ ?>