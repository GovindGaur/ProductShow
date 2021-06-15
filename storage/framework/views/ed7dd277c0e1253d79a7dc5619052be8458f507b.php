<?php $__env->startSection('content'); ?>


<!-- <div class="row"> -->
<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $UserProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="<?php echo e($image_file_path); ?>/<?php echo e($UserItem->product_image); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                <?php echo e($UserItem->product_name); ?>

                            </h6>
                            <h6>
                                Price:
                                <span>
                                    <?php echo e($UserItem->product_price); ?>

                                </span>
                            </h6>
                        </div>
                        <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a>
                        <!-- <div class="new">
                            <span>
                                New
                            </span>
                        </div> -->
                    </a>
                </div>
            </div>





            <!-- <div class="col-md-2 p-5 ">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top"
                src="http://localhost/product_show/storage/app/public/SellerProductImages/<?php echo e($UserItem->product_image); ?>"
                height="100px" width="100px">
            <div class="card-body">
                <p class="card-text"><b> <?php echo e($UserItem->product_name); ?></b></p>
                <p class="card-text"><b> <?php echo e($UserItem->product_price); ?></b></p>
                <p class="card-text"><b> <?php echo e($UserItem->product_desc); ?></b></p>
                <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><button class="btn btn-success">Buy </button></a>
            </div>
        </div>
        <div>

        </div> -->
            <!-- </div> -->

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- <div class="btn-box">
            <a href="">
                View All
            </a>
        </div> -->

    </div>
</section>
<!-- </div> -->


<!-- <div class="btn-box">
            <a href="">
                View All
            </a>
        </div> -->
<!-- </div>
</section> -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserAllProdctShow.blade.php ENDPATH**/ ?>