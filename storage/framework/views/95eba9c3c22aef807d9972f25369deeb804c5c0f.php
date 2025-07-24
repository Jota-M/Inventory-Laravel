<?php
$containerNav = $containerNav ?? 'container-fluid';
?>

<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="<?php echo e($containerNav); ?>">

    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
    <?php if(isset($navbarFull)): ?>
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
      <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
          <?php echo $__env->make('_partials.macros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </span>
        <span class="app-brand-text demo menu-text fw-bold"><?php echo e(config('variables.templateName')); ?></span>
      </a>

      <?php if(isset($menuHorizontal)): ?>
      <!-- Display menu close icon only for horizontal-menu with navbar-full -->
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
        <i class="bx bx-x bx-sm align-middle"></i>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- ! Not required for layout-without-menu -->
    <?php if(!isset($navbarHideToggle)): ?>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0<?php echo e(isset($menuHorizontal) ? ' d-xl-none ' : ''); ?> <?php echo e(isset($contentNavbar) ?' d-xl-none ' : ''); ?>">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    <?php endif; ?>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

      <!-- Style Switcher -->
      <div class="navbar-nav align-items-center">
        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
          <i class='bx bx-sm'></i>
        </a>
      </div>
      <!--/ Style Switcher -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="<?php echo e(Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png')); ?>" alt class="rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="<?php echo e(Route::has('profile.show') ? route('profile.show') : 'javascript:void(0);'); ?>">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="<?php echo e(Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png')); ?>" alt class="rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">
                      <?php if(Auth::check()): ?>
                      <?php echo e(Auth::user()->name); ?>

                      <?php else: ?>
                      John Doe
                      <?php endif; ?>
                    </span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo e(Route::has('profile.show') ? route('profile.show') : 'javascript:void(0);'); ?>">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <?php if(Auth::check() && Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
            <li>
              <a class="dropdown-item" href="<?php echo e(route('api-tokens.index')); ?>">
                <i class='bx bx-key me-2'></i>
                <span class="align-middle">API Tokens</span>
              </a>
            </li>
            <?php endif; ?>
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class="bx bx-credit-card me-2"></i>
                <span class="align-middle">Billing</span>
              </a>
            </li>
            <?php if(Auth::User() && Laravel\Jetstream\Jetstream::hasTeamFeatures()): ?>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <h6 class="dropdown-header">Manage Team</h6>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo e(Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)'); ?>">
                <i class='bx bx-cog me-2'></i>
                <span class="align-middle">Team Settings</span>
              </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', Laravel\Jetstream\Jetstream::newTeamModel())): ?>
            <li>
              <a class="dropdown-item" href="<?php echo e(route('teams.create')); ?>">
                <i class='bx bx-user me-2'></i>
                <span class="align-middle">Create New Team</span>
              </a>
            </li>
            <?php endif; ?>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <lI>
              <h6 class="dropdown-header">Switch Teams</h6>
            </lI>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <?php if(Auth::user()): ?>
            <?php $__currentLoopData = Auth::user()->allTeams(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.switchable-team','data' => ['team' => $team]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-switchable-team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['team' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php endif; ?>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <?php if(Auth::check()): ?>
            <li>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-power-off me-2'></i>
                <span class="align-middle">Logout</span>
              </a>
            </li>
            <form method="POST" id="logout-form" action="<?php echo e(route('logout')); ?>">
              <?php echo csrf_field(); ?>
            </form>
            <?php else: ?>
            <li>
              <a class="dropdown-item" href="<?php echo e(Route::has('login') ? route('login') : 'javascript:void(0)'); ?>">
                <i class='bx bx-log-in me-2'></i>
                <span class="align-middle">Login</span>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

  </div>
</nav>
<!-- / Navbar -->
<?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/layouts/sections/navbar/navbar.blade.php ENDPATH**/ ?>