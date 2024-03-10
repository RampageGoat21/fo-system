

<?php $__env->startSection('container'); ?>


<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<h2 class="mt-3">Database Query Test</h2>
<div class="query">
    
    <div class="container-sm mt-4">
        
        <div class="card mb-3">
            <div class="card-body">
                <h5>Menampilkan data penjualan harian</h5>
                <p><?php echo e($value); ?></p>
                <p><?php echo e($kamar); ?></p>
                <p><?php echo e($coba); ?></p>
            </div>
            
        
            
        
            
                
        
                
                
            
        </div>
    <div class="container mb-5">
        <div class="table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Age</th>
                    <th scope="col">Room</th>
                    <th scope="col">Num</th>
                    <th scope="col">Describe</th>
                    <th scope="col">Last Seen</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($b->name); ?></td>
                    <td><?php echo e($b->age); ?></td>
                    <td><?php echo e($b->room->name); ?></td>
                    <td><?php echo e($b->num); ?></td>
                    <td><?php echo e($b->describe); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->last_seen))); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/test/index.blade.php ENDPATH**/ ?>