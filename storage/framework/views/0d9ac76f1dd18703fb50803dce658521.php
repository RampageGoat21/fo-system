<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard">Urban Camping Hostel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          <?php echo csrf_field(); ?>
          <button type="submit" class="nav-link px-3 bg-dark border-0 text-danger fs-6"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
      </div>
    </div>
  </header><?php /**PATH C:\Users\USER\Desktop\Web\Daily\hotel-management\resources\views/dashboard/layouts/header.blade.php ENDPATH**/ ?>