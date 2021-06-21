<?php $__env->startSection('content'); ?>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="/" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<style>
body {
    background: #dedede;
}

.page-wrap {
    min-height: 100vh;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/404page.blade.php ENDPATH**/ ?>