

<?php $__env->startSection('container'); ?>

<div class="container border-bottom">
<a href="/customers/create" class="btn btn-success float-end mt-2"><i class="bi bi-plus-lg"></i> Add Customers</a>
<h1 class="mt-3 pb-2">Customers</h1>
</div>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success mt-4" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>

<div class="container-sm mt-2">
  <form action="/customers" method="get">
    <?php echo csrf_field(); ?>
    <div class="input-group my-4">
      <input type="text" name="keyword" class="form-control" placeholder="Cari....." id="keyword" autocomplete="off" autofocus>
      <button class="btn btn-secondary" name="search" type="submit" id="search"><i class="bi bi-search"></i></button>
      
    </div>
  </form>

    <div class="table" id="container">
        <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telp</th>
                <th scope="col">TTL</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($c->name); ?></td>
                <td><?php echo e($c->gender); ?></td>
                <td><?php echo e($c->telepon); ?></td>
                <td><?php echo e($c->ttl); ?></td>
                <td>
                  <a href="/customers/<?php echo e($c->id); ?>" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                  <a href="/customers/<?php echo e($c->id); ?>/edit" class="badge bg-warning"><i class="bi bi-pen"></i></a>
                  <form action="/customers/<?php echo e($c->id); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yaki ingin menghapus data ini ?')"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
      <?php echo e($customers->links()); ?>

    </div>

    

    
    

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/customers/index.blade.php ENDPATH**/ ?>