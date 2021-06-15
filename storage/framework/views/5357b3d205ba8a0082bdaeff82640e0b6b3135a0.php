<?php $__env->startSection('content'); ?>
<div class="container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Result for Product</h2>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="search-item">
                <div class="">
                    <h2><?php echo e($item->product_name); ?></h2>
                    <h5><?php echo e($item->product_price); ?></h5>
                    <p><?php echo e($item->product_desc); ?></p>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserSearch.blade.php ENDPATH**/ ?>