<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Management | <?php echo e($title); ?></title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    
    <script type="text/javascript" src="/js/jquery-3.7.0.min.js"></script>

    <!-- Fetaher Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>


  </head>
  <body>
      
<?php echo $__env->make('dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="row">
      <?php echo $__env->make('dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php echo $__env->yieldContent('container'); ?>
      </main>
    </div>
  </div>
  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/dashboard/layouts/main.blade.php ENDPATH**/ ?>