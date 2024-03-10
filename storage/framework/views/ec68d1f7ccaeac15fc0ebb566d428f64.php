

<?php $__env->startSection('container'); ?>

<div class="container border-bottom">
    <h1 class="mt-3 pb-2">Booking</h1>
</div>

<div class="card mt-3">
    <div class="row">
      <div class="col-md-4">
        <?php if($booking->room->image): ?>
        <img src="<?php echo e(asset('storage/'. $booking->room->image)); ?>" class="img-fluid rounded-start" alt="user-image">
        <?php else: ?>
        <img src="/images/pexels-zaksheuskaya-1561020.jpg" class="img-fluid rounded-start" alt="user-image">
        <?php endif; ?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text text-end">Book ID : <?php echo e($booking->id); ?></p>
          <h5 class="card-title fs-3 text-center"><?php echo e($booking->customers->name); ?></h5>
          <p class="card-text">Tipe Kamar : <?php echo e($booking->room->name); ?></p>
          <p class="card-text">Jumlah Kamar : <?php echo e($booking->numOfRoom); ?></p>
          <p class="card-text">Check In : <?php echo e($booking->checkIn); ?></p>
          <p class="card-text">Check Out : <?php echo e($booking->checkOut); ?></p>
          <p class="card-text fs-4 text-end">Total : <?php echo e($booking->priceSum); ?></p>
          <p class="card-text"><small class="text-body-secondary"></small></p>
        </div>
      </div>
    </div>
    <div class="p-3 bg-secondary-subtle border-top text-center">
      <form action="/booking/<?php echo e($booking->id); ?>/cancel" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
          <button type="submit" name="btnCancel" value="Cancel" class="btn btn-danger border-0"><i class="bi bi-x-lg"></i> Batalkan</button>
      </form>
      <form action="/booking/<?php echo e($booking->id); ?>/done" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
          <button type="submit" name="btnDone" value="Done" class="btn btn-success border-0 ms-2"><i class="bi bi-check2"></i> Selesai</button>
      </form>
      <a href="/booking" class="text-decoration-none btn btn-primary ms-2"><i class="bi bi-arrow-return-right"></i> Kembali</a>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/booking/show.blade.php ENDPATH**/ ?>