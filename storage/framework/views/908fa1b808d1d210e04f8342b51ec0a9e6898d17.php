<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
<h4>Usuarios de la aplicación</h4>

<!-- Basic Bootstrap Table -->
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
<div class="card">
  <h5 class="card-header">Tabla Básica</h5>
  <div class="table-responsive text-nowrap">
    <a href="<?php echo e(route('pages-users-create')); ?>" class="btn btn-primary">Añadir un nuevo usuario</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Rol</th>
          <th>Creado en</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <tr>
          <td><?php echo e($user->id); ?></td>
          <td><?php echo e($user->name); ?></td>
          <td><?php echo e($user->email); ?></td>
          <td>
            <?php if($user->hasRole('admin')): ?>
            <a href="<?php echo e(route ('pages-users-switch-role',$user->id)); ?>">
              <span class="badge bg-primary">Administrador</span>
            </a>
            <?php elseif($user->hasRole('tecnica')): ?>
            <a href="<?php echo e(route ('pages-users-switch-role',$user->id)); ?>">
              <span class="badge bg-success">Cajera</span>
            </a>
            <?php elseif($user->hasRole('almacen')): ?>
            <a href="<?php echo e(route ('pages-users-switch-role',$user->id)); ?>">
              <span class="badge bg-warning">Almacén</span>
            </a>
            <?php else: ?>
            <a href="<?php echo e(route ('pages-users-switch-role',$user->id)); ?>">
              <span class="badge bg-secondary">no Asignado</span>
          </a>
            <?php endif; ?>
          </td>
          <td><?php echo e($user->created_at); ?></td>
          <td>
            <a href="<?php echo e(route('pages-users-show', $user->id)); ?>">
              <span class="badge bg-success">Editar</span>
            </a> | 
            <a href="<?php echo e(route('pages-users-destroy', $user->id)); ?>">
              <span class="badge bg-danger">Eliminar</span>
            </a>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div> 
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'tecnica')): ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Acceso Denegado</h4>
  <p>No tienes permisos para acceder a esta sección de la página</p>
  <hr>
  <p class="mb-0">Si crees que es un error, ponte en contacto con el administrador</p>
</div>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'almacen')): ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Acceso Denegado</h4>
  <p>No tienes permisos para acceder a esta sección de la página</p>
  <hr>
  <p class="mb-0">Si crees que es un error, ponte en contacto con el administrador</p>
</div>
<?php endif; ?>

<!--/ Basic Bootstrap Table -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/users.blade.php ENDPATH**/ ?>