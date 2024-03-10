


<?php $__env->startSection('container'); ?>
<div class="container border-bottom">
  <h1 class="mt-3 pb-2">Dashboard</h1>
</div>
<div class="mb-4 mt-3">
    <div class="container text-center">
      <div class="row d-flex flex-wrap my-3 px-3">
        <div class="col my-3">
          <div class="card text-start">
            <div class="card-body">
              <p class="card-text text-secondary fw-semibold">Customers</p>
              <h1 class="card-title"><?php echo e($customer); ?></h1>
              <p class="card-text text-secondary">Terakhir Di update 2 hari yang lalu</p>
            </div>
          </div>
        </div>
        <div class="col my-3">
          <div class="card text-start">
            <div class="card-body">
              <p class="card-text text-secondary fw-semibold">Total Booking</p>
              <h1 class="card-title"><?php echo e($daily1); ?></h1>
              <p class="card-text text-secondary">Terakhir Di update hari ini</p>
            </div>
          </div>
        </div>
        <div class="col my-3">
          <div class="card text-start">
            <div class="card-body">
              <p class="card-text text-secondary fw-semibold">Total Revenue</p>
              <h1 class="card-title">Rp <?php echo number_format($daily3, 2); ?></h1>
              <p class="card-text text-secondary">Terakhir Di update hari ini</p>
            </div>
          </div>
        </div>
        <div class="chart m-3"><canvas id="dashboardChartDay"></canvas></div>
      </div>
      <div class="row d-flex flex-wrap my-3 px-3">
        <div class="col-xl-4 col-lg-6">
          <div class="row my-3">
            <div class="card text-start">
              <div class="card-body">
                <p class="card-text text-secondary fw-semibold">Total Booking Selesai</p>
                <h1 class="card-title"><?php echo e($daily2); ?></h1>
                <p class="card-text text-secondary">Terakhir Di update hari ini</p>
              </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="card text-start">
              <div class="card-body">
                <p class="card-text text-secondary fw-semibold">Total Revenue Minggu Ini</p>
                <h1 class="card-title">Rp <?php echo number_format($daily4, 2); ?></h1>
                <p class="card-text text-secondary">Terakhir Di update hari ini</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-6 align-self-end">
          <div class="chart m-3"><canvas id="dashboardChartWeek"></canvas></div>
        </div>
      </div>
    </div>
</div>


<script>
  const data = <?php echo $room; ?>;
  const valueDaily = <?php echo $daily; ?>;
  const valueWeekly = <?php echo $weekly; ?>;
  const valueMonthly = <?php echo $monthly; ?>;

  console.log(valueWeekly);
  console.log(valueDaily);

  const configDaily = {
      type: 'bar',
      data: {
      labels: valueDaily.map(row => row.rom_name),
      datasets: [
              {
              label: 'Penjualan Hari Ini',
              data: valueDaily.map(row => row.sum),
              backgroundColor: '#36A2EB',
              barPercentage: 0.5
              },
          ]
      },
      options: {
          animation: true,
      }
  };

  const configWeekly = {
      type: 'line',
      data: {
        labels: valueWeekly.map(row => row.name),
        datasets: [
          {
            label: 'Penjualan Mingguan',
            data: valueWeekly.map(row => row.sum),
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.3,
            borderCapStyle: 'round'
          }
        ]
      } ,
      options: {
        pointRadius: 5
      }
  };
  
  
  new Chart(document.getElementById('dashboardChartDay'), configDaily);
  new Chart(document.getElementById('dashboardChartWeek'), configWeekly);
</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/dashboard/index.blade.php ENDPATH**/ ?>