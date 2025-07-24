

<?php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['link' => 'javascript:void(0)', 'name' => 'User'], ['name' => 'Profile']];
?>

<?php $__env->startSection('title', 'Profile'); ?>


<?php $__env->startSection('content'); ?>

  <?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
   <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('xWRzNwP')) {
    $componentId = $_instance->getRenderedChildComponentId('xWRzNwP');
    $componentTag = $_instance->getRenderedChildComponentTagName('xWRzNwP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xWRzNwP');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('xWRzNwP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   </div>
  <?php endif; ?>

  <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
    <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('osbo7wq')) {
    $componentId = $_instance->getRenderedChildComponentId('osbo7wq');
    $componentTag = $_instance->getRenderedChildComponentTagName('osbo7wq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('osbo7wq');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('osbo7wq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
  <?php endif; ?>

  <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
   <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.two-factor-authentication-form')->html();
} elseif ($_instance->childHasBeenRendered('1Izm5Dj')) {
    $componentId = $_instance->getRenderedChildComponentId('1Izm5Dj');
    $componentTag = $_instance->getRenderedChildComponentTagName('1Izm5Dj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1Izm5Dj');
} else {
    $response = \Livewire\Livewire::mount('profile.two-factor-authentication-form');
    $html = $response->html();
    $_instance->logRenderedChild('1Izm5Dj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   </div>
  <?php endif; ?>

  <div class="mb-4">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('wjsot2Q')) {
    $componentId = $_instance->getRenderedChildComponentId('wjsot2Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('wjsot2Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wjsot2Q');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('wjsot2Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>

  <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('wIvJ1ty')) {
    $componentId = $_instance->getRenderedChildComponentId('wIvJ1ty');
    $componentTag = $_instance->getRenderedChildComponentTagName('wIvJ1ty');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wIvJ1ty');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('wIvJ1ty', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/profile/show.blade.php ENDPATH**/ ?>