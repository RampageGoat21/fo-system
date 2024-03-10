

<?php $__env->startSection('container'); ?>

<h1 class="border-bottom mt-3 pb-2">Report</h1>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success mt-4" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>

<div class="container mb-5">

    <ul class="nav nav-tabs nav-justified mt-3">
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('done') ? 'active' : ''); ?>" href="/report"><h4>Done</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('cancel') ? 'active' : ''); ?>" href="/cancel"><h4>Canceled</h4></a>
        </li>
      </ul>

    <div class="table mb-5">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Book ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">C/I</th>
                <th scope="col">C/O</th>
                <th scope="col">Rate</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $booking->where('status', 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($b->id); ?></td>
                    <td><?php echo e($b->customers->name); ?></td>
                    <td><?php echo e($b->room->name); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkIn))); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkOut))); ?></td>
                    <td><?php echo e($b->priceSum); ?></td>
                    <td>
                      <a href="/report/<?php echo e($b->id); ?>" class="btn btn-sm btn-primary" id="print-button"><i class="bi bi-printer"></i> Print</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/report/done.blade.php ENDPATH**/ ?>