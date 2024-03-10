

<?php $__env->startSection('container'); ?>
<div class="container border-bottom">
  <a href="/rooms/create" class="btn btn-success float-end mt-2"><i class="bi bi-plus-lg"></i> Add Rooms</a>
  
<h1 class="mt-3 pb-2">Rooms</h1>
</div>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success mt-4" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>

<div class="row row-cols-1 g-4 my-2">
  
  <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col">
      

      <div class="card">
        <div class="row g-0">
          <div class="col-md-2">
            <?php if($r->image): ?>
            <img src="<?php echo e(asset('storage/'. $r->image)); ?>" class="img-fluid rounded-start" alt="user-image">
            <?php else: ?>
            <img src="/images/pexels-zaksheuskaya-1561020.jpg" class="img-fluid rounded-start" alt="user-image">
            <?php endif; ?>
            
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($r->name); ?></h5>
              <p class="card-text"><?php echo e($r->description); ?></p> 
              <p class="card-text"><small class="text-body-primary">Rp. <?php echo number_format($r->price, 2); ?></small></p>
              
              
              <a href="/rooms/<?php echo e($r->id); ?>/edit" class="btn btn-primary float-end border-0"><i class="bi bi-pencil-square"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/rooms/index.blade.php ENDPATH**/ ?>