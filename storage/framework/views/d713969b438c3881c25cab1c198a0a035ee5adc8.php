<?php $__env->startSection('content'); ?>
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    Smart Watches
                                </h1>
                                <p>
                                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl,
                                    convallis et augue sit amet, lobortis semper quam.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="http://localhost/Product_show/Modules/SellerShow/Resources/assets/images/slider-img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    Smart Watches
                                </h1>
                                <p>
                                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl,
                                    convallis et augue sit amet, lobortis semper quam.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="http://localhost/Product_show/Modules/SellerShow/Resources/assets/images/slider-img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    Smart Watches
                                </h1>
                                <p>
                                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl,
                                    convallis et augue sit amet, lobortis semper quam.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="http://localhost/Product_show/Modules/SellerShow/Resources/assets/images/slider-img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators hidde-lg">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
    </div>

</section>
<section class="shop_section layout_padding">
    <div class="container">
    <div class="heading_container heading_center">
            <h2>
                Latest Product
            </h2>
        </div>
        <div class="row">
            
            <?php $__currentLoopData = $UserProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <div class="col-sm-6 col-xl-3">
            <form method="Post" action="/addToCart">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value=" <?php echo e($UserItem->id); ?>" >
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
                            <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                        </div>
                        <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><button class="btn btn-success">Buy
                            </button></a>
                            <button class="btn btn-success" type="submit" style="margin-left: 52px;">Add To Cart
                            </button>
                    </a>
                </div>
            </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="btn-box">
            <a href="/FetchAllProduct">
                View All
            </a>
        </div>
    </div>
</section>


<!-- Latest Mobile -->

<hr>
<section class="shop_section layout_padding">
    <div class="container">
    <div class="heading_container heading_center">
            <h2>
                Latest Mobile
            </h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $UserProductMobile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                        </div>
                        <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a>

                    </a>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="btn-box">
            <a href="/FetchmMbileData">
                View All
            </a>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserDashboard.blade.php ENDPATH**/ ?>