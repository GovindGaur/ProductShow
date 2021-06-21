<?php $__env->startSection('content'); ?>

<?php if(Session()->has('user')): ?>

<input type="hidden" id="user_id" value="<?php echo e(Session::get('user')['id']); ?>">


<?php endif; ?>
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                All Product
            </h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $UserProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" id="product_id" name="product_id" value="<?php echo e($UserItem->id); ?>">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                <?php echo csrf_field(); ?>

                <div class="box">
                    <!-- <a href=""> -->
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
                        <h6 id="product_name">
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
                    <input type="hidden" name="cart_id" id="cart_id" value=" <?php echo e($UserItem->cart_id); ?>">
                    <!-- <img src="<?php echo e(URL::to('/')); ?>/images/addtocart.png" onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="<?php echo e($UserItem->id); ?>">
                        <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart(<?php echo e($UserItem->id); ?>)"> add to cart</button> -->
                        <input type="image" value="button" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                            onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt="submit Button"
                            onMouseOver="this.src='<?php echo e(URL::to('/')); ?>/images/addtocart.png'" style="margin-left: 16px;">
                        <?php }else{ ?>
                        <a href="CartList" id="CartList">Go To Cart</a>
                        <!-- <div id="gotocart"></div> -->

                        <?php } ?>
                    </span>
                    <!-- <button class=" btn btn-success" type="submit" style="margin-left: 52px;">Add To Cart
                    </button> -->
                    <!-- </form> -->
                </div>
                <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>
            </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!-- <div class="btn-box">
            <a href="/FetchAllProduct">
                View All
            </a>
        </div> -->
    </div>
</section>

<?php $__env->stopSection(); ?>
<script>
let ProductId;

// let UserId = <?php ?>;
// // var UserId =

// console.log(UserId);

function addToCart(ProductId) {
    let UserId = $('#user_id').val();
    // alert(UserId);
    var ProductId = ProductId
    var cart_id = $('#cart_id').val();
    console.log(UserId);
    // return
    if (UserId != undefined) {
        $.ajax({
            url: '/addToCart',
            method: 'post',
            data: {
                product_id: ProductId,
                "_token": "<?php echo e(csrf_token()); ?>"
            },
            success: function(data) {
                // return true;
                $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
                console.log(data);
            }
        });
    } else {
        // alert("here...");
        window.location.href = 'http://127.0.0.1:8000/Userloginshow';
        return false;
    }
    // Userloginshow

}
</script>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserAllProdctShow.blade.php ENDPATH**/ ?>