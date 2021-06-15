<?php $__env->startSection('content'); ?>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $CartList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="<?php echo e($image_file_path); ?>/<?php echo e($CartItem->product_image); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                <?php echo e($CartItem->product_name); ?>

                            </h6>
                            <h6>
                                Price:
                                <span>
                                    <?php echo e($CartItem->product_price); ?>

                                </span>
                            </h6>
                        </div>
                        <a href="/initiate?p=<?php echo e($CartItem->product_price); ?>"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a>
                </div>
                <a href="/RemoveCart/<?php echo e($CartItem->cart_id); ?>"><button class="btn btn-success"
                                style="margin-left: 82px;">RemoveCart
                            </button>
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserCartList.blade.php ENDPATH**/ ?>