<?php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
?>



<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('page-style'); ?>

<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/css/pages/page-auth.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        
        <div class="mx-auto">
        <img src="https://www.aapospotosi.com/gallery_gen/f9dbc1ce6d68e7af2066d9811ab62497_1020x1320_fit.png" style="width:25em"alt="">
          <h3>Administracion Autonoma para Obras Sanitarias</h3>
          <h3>POTOSI</h3>
          <p>
          La Administración Autónoma para Obras Sanitarias AAPOS-POTOSÍ <br> es responsable de brindar los servicios de abastecimiento de agua potable y alcantarillado sanitario a la ciudad de Potosí 
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4">
          <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-2 mb-2">
            <!-- <span class="app-brand-logo demo"><?php echo $__env->make('_partials.macros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span> -->
            <!-- <span class="app-brand-text demo h3 mb-0 fw-bold"><?php echo e(config('variables.templateName')); ?></span> -->
          </a>
        </div>
        <!-- /Logo -->
        <!-- <h4 class="mb-2">Welcome to <?php echo e(config('variables.templateName')); ?>! 👋</h4> -->
        <!-- <p class="mb-4">Please sign-in to your account and start the adventure</p> -->
          
          <img src="https://www.aapospotosi.com/gallery_gen/f3ac9540887267a1d14a013defd46ca0_910x704_fit.png" style="width:25em"alt="">
          <h3 style="text-align:center;">Bienvenido</h3>
        <?php if(session('status')): ?>
        <div class="alert alert-success mb-1 rounded-0" role="alert">
          <div class="alert-body">
            <?php echo e(session('status')); ?>

          </div>
        </div>
        <?php endif; ?>

        <form id="formAuthentication" class="mb-3" action="<?php echo e(route('login')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="login-email" name="email" placeholder="user@example.com" autofocus value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
              <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Contraseña</label>
              <?php if(Route::has('password.request')): ?>
              <a href="<?php echo e(route('password.request')); ?>">
                <small>Forgot Password?</small>
              </a>
              <?php endif; ?>
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="login-password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Secion</button>
        </form>

        

        <div class="divider my-4">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/blankLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAPOS\resources\views/auth/login.blade.php ENDPATH**/ ?>