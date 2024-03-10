


<?php $__env->startSection('container'); ?>
<div class="row justify-content-center">
    <div class="col-md-5">
      <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo e(session('success')); ?>

          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <?php if(session()->has('loginError')): ?>
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
          <?php echo e(session('loginError')); ?>

        </div>
      <?php endif; ?>

      <main class="form-signin w-100 m-auto">
        <h1 class="text-center mt-5"><i class="bi bi-buildings"></i></h1>
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
          <form action="/" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-floating">
              <input type="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" id="username" placeholder="Username" autofocus required value="<?php echo e(old('username')); ?>">
              <label for="username">Username</label>
              <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback mb-2">
                  <?php echo e($message); ?>

                </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('login.plugin.plugin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/login/index.blade.php ENDPATH**/ ?>