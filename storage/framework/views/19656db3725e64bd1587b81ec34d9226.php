

<?php $__env->startSection('container'); ?>

<div class="container border-bottom">
  <a href="/booking/create" class="btn btn-success float-end mt-2"><i class="bi bi-plus-lg"></i> Add Booking</a>
  <h1 class="mt-3 pb-2">Booking</h1>
</div>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success mt-4" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>



<div class="container-sm mt-4">

    <div class="container mb-5">
        <div class="table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Jumlah<br>Kamar</th>
                    <th scope="col">C/I</th>
                    <th scope="col">C/O</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $booking->where('status', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($b->id); ?></td>
                    <td><?php echo e($b->customers->name); ?></td>
                    <td><?php echo e($b->room->name ?? ''); ?></td>
                    <td><?php echo e($b->numOfRoom); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkIn))); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkOut))); ?></td>
                    <td>
                      <a href="/booking/<?php echo e($b->id); ?>" class="badge bg-primary"><i class="bi bi-eye" style="font-size: 15px"></i></a>
                      
                      
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end">
      <?php echo e($booking->links()); ?>

    </div>   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/booking/index.blade.php ENDPATH**/ ?>