<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['submit']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['submit']); ?>
<?php foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="card">
  <h5 class="card-header">
    <?php echo e($title); ?>

  </h5>
  <div class="card-body">
    <form wire:submit.prevent="<?php echo e($submit); ?>">

      <p class="card-text text-muted">
        <?php echo e($description); ?>

      </p>

      <?php echo e($form); ?>


      <?php if(isset($actions)): ?>
        <div class="d-flex justify-content-end">
          <?php echo e($actions); ?>

        </div>
      <?php endif; ?>
    </form>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/vendor/jetstream/components/form-section.blade.php ENDPATH**/ ?>