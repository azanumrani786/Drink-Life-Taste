<?php $__env->startSection('content'); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo e(asset('admin/assets/img/admin.png')); ?>">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
        Distributor
          <!-- <div class="logo-image-big">
            <img src="{{ asset('admin/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <?php echo $__env->make('layouts.dispatcher.sidebar.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php echo $__env->make('layouts.dispatcher.navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    Wellcome Distributors
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dispatcher.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\juman\resources\views/dispatcher/home.blade.php ENDPATH**/ ?>