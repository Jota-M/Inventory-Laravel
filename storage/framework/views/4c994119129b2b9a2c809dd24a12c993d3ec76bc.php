<?php
$configData = Helper::appClasses();
?>



<?php $__env->startSection('title', 'Dashboard Inventario'); ?>

<?php $__env->startSection('vendor-style'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">

  <h2 class="mb-4 text-center fw-bold text-primary">Panel de Control - Inventario</h2>

  <div class="row">
  <!-- Estadísticas básicas (igual que antes) -->
   <div class="row">
  
  <!-- Primera tarjeta: Sistemas -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Sistemas" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-edit fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Productos</span>
        <h2 class="mb-0"><?php echo e($n_materiales); ?></h2>
      </div>
    </div>
  </div>

  <!-- Segunda tarjeta: Tipos -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Tipos" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-dock-top fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Tipo de Productos</span>
        <h2 class="mb-0"><?php echo e($n_types); ?></h2>
      </div>
    </div>
  </div>

  <!-- Tercera tarjeta: Dispositivos (ajustada) -->
  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Dispositivos" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-message-square-detail fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Proveedores</span>
        <h2 class="mb-0"><?php echo e($n_proveedores); ?></h2>
      </div>
    </div>
  </div>

  <!-- Cuarta tarjeta: Reportes -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Reportes" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Reportes</span>
        <h2 class="mb-0"><?php echo e($n_reports); ?></h2>
      </div>
    </div>
  </div>

  <!-- Quinta tarjeta: Backups -->
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <!-- Contenido de la tarjeta "Backups" -->
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-purchase-tag fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Backups</span>
        <h2 class="mb-0"><?php echo e($n_backups); ?></h2>
      </div>
    </div>
  </div>
  <!-- ... tus tarjetas ... -->

  <!-- Materiales con bajo stock -->
  <div class="col-12 col-md-6 mb-4">
    <div class="card">
      <div class="card-header">Materiales con bajo stock</div>
      <div class="card-body">
        <ul>
          <?php $__empty_1 = true; $__currentLoopData = $lowStockMaterials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><strong><?php echo e($material->name); ?></strong> (<?php echo e($material->code); ?>) - Stock: <?php echo e($material->stock); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No hay materiales con bajo stock.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Proveedores con más materiales -->
  <div class="col-12 col-md-6 mb-4">
    <div class="card">
      <div class="card-header">Top proveedores por materiales activos</div>
      <div class="card-body">
        <ul>
          <?php $__empty_1 = true; $__currentLoopData = $topSuppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><?php echo e($supplier->name); ?> - Materiales activos: <?php echo e($supplier->active_materials_count); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No hay proveedores activos.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Tipos con mayor stock -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header">Tipos con mayor stock total</div>
      <div class="card-body">
        <ul>
          <?php $__empty_1 = true; $__currentLoopData = $topTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><?php echo e($type->name); ?> - Stock total: <?php echo e($type->total_stock ?? 0); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No hay tipos activos.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Últimos movimientos de salida -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header">Últimos movimientos de salida</div>
      <div class="card-body">
        <ul>
          <?php $__empty_1 = true; $__currentLoopData = $recentOutputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><?php echo e($output->name); ?> - Cantidad: <?php echo e($output->quantity); ?> - Fecha: <?php echo e($output->created_at); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No hay movimientos recientes.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/content/pages/pages-home.blade.php ENDPATH**/ ?>