

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
                    <h5>Edit Product</h5>
                    <form action="<?php echo e(route('products.update', $product)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <label>Name:</label>
                        <input type="text" name="name" value="<?php echo e($product->name); ?>" required  class="form-control">
                        <label>Description:</label>
                        <textarea name="description" required  class="form-control" style="padding: 0px;"><?php echo e($product->description); ?></textarea>
                        <label>Price:</label>
                        <input type="number" step="0.01" name="price" value="<?php echo e($product->price); ?>" required  class="form-control">
                        <label>Quantity:</label>
                        <input type="number" name="quantity" value="<?php echo e($product->quantity); ?>" required  class="form-control"> 
                        <label>Image:</label>
                        <input type="file" name="image"  required class="form-control">
                        <?php if($product->image): ?>
                            <p>Current Image:</p>
                            <img src="<?php echo e(asset($product->image)); ?>" width="100">
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary btn-sm">Update Product</button>
                    </form>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\juman\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>