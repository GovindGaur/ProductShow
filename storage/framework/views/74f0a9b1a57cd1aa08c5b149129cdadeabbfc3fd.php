<?php $__env->startSection('content'); ?>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: <?php echo config('sellershow.name'); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sellershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/SellerShow\Resources/views/index.blade.php ENDPATH**/ ?>