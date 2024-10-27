

<?php $__env->startSection('content'); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo e(asset('admin/assets/img/admin.png')); ?>">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          Admin
        </a>
      </div>
      <?php echo $__env->make('layouts.admin.sidebar.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php echo $__env->make('layouts.admin.navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h5>Add New Dispatcher</h5>
                <form action="<?php echo e(route('dispatchers.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required class="form-control">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required class="form-control">

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required class="form-control">

                    <button type="submit" class="btn btn-sm btn-primary">Create Dispatcher</button>
                </form>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\juman\resources\views/admin/dispatchers/create.blade.php ENDPATH**/ ?>