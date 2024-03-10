

<?php $__env->startSection('container'); ?>


<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<h2 class="mt-3">Database Query Test</h2>
<div class="query">

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
                  <?php $__currentLoopData = $query->where('status', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($b->id); ?></td>
                    <td><?php echo e($b->customers->name); ?></td>
                    <td><?php echo e($b->room->name ?? ''); ?></td>
                    <td><?php echo e($b->numOfRoom); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkIn))); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($b->checkOut))); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="sum">
            <div class="m-3" style="height: 500px;"><canvas id="chartJS"></canvas></div>
            <p><?php echo e($total); ?></p>
            <script>
                const room = <?php echo $room; ?>

                const data = <?php echo $total; ?>;
                console.log(data);
                console.log(room);

                const config = {
                type: 'bar',
                data: {
                labels: room.map(row => row.name),
                datasets: [
                        {
                        label: 'Penjualan Kamar',
                        data: data.map(row => row.sum),
                        backgroundColor: '#36A2EB'
                        },
                    ]
                },
                options: {
                    animation: true
                }
            };

            new Chart(document.getElementById('chartJS'), config);
            </script>
        </div>
    </div>

</div>


        

    
        

        
        
    



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/test/index2.blade.php ENDPATH**/ ?>