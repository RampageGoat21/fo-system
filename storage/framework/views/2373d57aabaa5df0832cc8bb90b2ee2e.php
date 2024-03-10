

<?php $__env->startSection('container'); ?>

<div class="container col-lg-8 mt-4">
    <h1 class="border-bottom border-3 my-3 pb-2">Add Booking</h1>

    <form method="post" action="/booking">
      <?php echo csrf_field(); ?>
      
      <h6 class="text-center pb-2 border-bottom">Customer</h6>
      <div class="mb-3">
          <label for="customers_id" class="form-label">Nama</label>
          <select class="form-select" name="customers_id" id="customer" onchange="clickSearch(this.value)">
            <option value="" selected>Pilih Customers</option>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(old('customers_id') == $c->id): ?>
                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
              <?php else: ?>
                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>
      <div class="content p-0" id="content">
        <div class="row">
          <div class="mb-3 col-md">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="">
          </div>
          <div class="mb-3 col-md">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender" value="">
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md">
            <label for="telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="">
          </div>
          <div class="mb-3 col-md">
            <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" name="ttl" value="">
          </div>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="">
        </div>
      </div>

      
      <h6 class="text-center pb-2 border-bottom mt-5">Room</h6>
      <div class="row">
        <div class="mb-3 col-md">
          <label for="room_id" class="form-label">Tipe Kamar</label>
          <select class="form-select" name="room_id" id="room" onchange="getPrice(this.value)">
            <option value="" selected>Pilih Tipe Kamar</option>
            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="price col-md" id="price">
          <div class="mb-3">
            <label for="price" class="form-label">Rate</label>
            <input type="text" class="form-control" name="price" value="" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-md-2">
          <label for="numOfRoom" class="form-label">Jumlah Kamar</label>
          <input type="number" class="form-control <?php $__errorArgs = ['numOfRoom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="numOfRoom" name="numOfRoom" value="<?php echo e(old('numOfRoom')); ?>">
          <?php $__errorArgs = ['numOfRoom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
              <?php echo e($message); ?>

            </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3 col-md">
          <label for="checkIn" class="form-label">Check In</label>
          <input type="date" class="form-control <?php $__errorArgs = ['checkIn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="checkIn" name="checkIn" value="<?php echo e(old('checkIn')); ?>">
          <?php $__errorArgs = ['checkIn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
              <?php echo e($message); ?>

            </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3 col-md">
          <label for="checkOut" class="form-label">Check Out</label>
          <input type="date" class="form-control col-auto <?php $__errorArgs = ['checkOut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="checkOut" name="checkOut" value="<?php echo e(old('checkOut')); ?>">
          <?php $__errorArgs = ['checkOut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
              <?php echo e($message); ?>

            </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="priceSum" class="form-label">Total Price</label>
        <input type="text" class="form-control <?php $__errorArgs = ['priceSum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="priceSum" name="priceSum" value="">
        <?php $__errorArgs = ['priceSum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="invalid-feedback">
            <?php echo e($message); ?>

          </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="mb-3">
        <label for="note" class="form-label">Note</label>
        <input type="text" class="form-control <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="note" name="note" value="<?php echo e(old('note')); ?>">
        <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="invalid-feedback">
            <?php echo e($message); ?>

          </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      

      <button type="submit" class="btn btn-primary mb-5 float-end">Book</button>
    </form>

    <script src="/js/search.js"></script>
    <script src="/js/price.js"></script>

  </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/booking/create.blade.php ENDPATH**/ ?>