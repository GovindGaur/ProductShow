<?php $__env->startSection('content'); ?>
<div class="row">
    <?php $__currentLoopData = $UserProductMobile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserMobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-2 p-5 ">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top"
                src="http://localhost/product_show/storage/app/public/SellerProductImages/<?php echo e($UserMobile->product_image); ?>"
                height="100px" width="100px">
            <div class="card-body">
                <p class="card-text"><b> <?php echo e($UserMobile->product_name); ?></b></p>
                <p class="card-text"><b> <?php echo e($UserMobile->product_price); ?></b></p>
                <p class="card-text"><b> <?php echo e($UserMobile->product_desc); ?></b></p>
                <a href="/initiate?p=<?php echo e($UserMobile->product_price); ?>"><button class="btn btn-success"> Buy </button> </a>
            </div>
        </div>
        <div>

        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/AllMobileShow.blade.php ENDPATH**/ ?>