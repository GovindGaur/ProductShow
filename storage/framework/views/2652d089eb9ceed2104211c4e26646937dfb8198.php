<?php $__env->startSection('content'); ?>
<style>
.quantity {
    display: inline-block;
}

.quantity .input-text.qty {
    width: 35px;
    height: 39px;
    padding: 0 5px;
    text-align: center;
    background-color: transparent;
    border: 1px solid #efefef;
}

.quantity.buttons_added {
    text-align: left;
    position: relative;
    white-space: nowrap;
    vertical-align: top;
}

.quantity.buttons_added input {
    display: inline-block;
    margin: 0;
    vertical-align: top;
    box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
    padding: 7px 10px 8px;
    height: 41px;
    background-color: #ffffff;
    border: 1px solid #efefef;
    cursor: pointer;
}

.quantity.buttons_added .minus {
    border-right: 0;
}

.quantity.buttons_added .plus {
    border-left: 0;
}

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
    background: #eeeeee;
}

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    margin: 0;
}

.quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
    outline: none;
}
</style>
<script data-require="jquery@3.1.1" data-semver="3.1.1"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo e(Module::asset('UserShow:css/style.css')); ?> " />
<script src="http://localhost/Product_show/Modules/UserShow/Resources/assets/js/script.js"></script>


<?php if(Session()->has('user')): ?>

<input type="hidden" id="user_id" value="<?php echo e(Session::get('user')['id']); ?>">


<?php endif; ?>
<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            <input type="hidden" name="product_id1" id="product_id" value="">
            <?php if(count($CartList)>0){?>

            <?php $__currentLoopData = $CartList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="product_id" id="product_id" value="<?php echo e($CartItem->id); ?>">
            <input type="hidden" name="cart_id" id="cart_id" value="<?php echo e($CartItem->cart_id); ?>">
            <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max=""
                    name="quantity" id="<?php echo e($CartItem->cart_id); ?>" value="<?php echo e($CartItem->product_quantity); ?>" title="Qty"
                    class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+"
                    class="plus">
                <small><button onclick="CartUpdate(<?php echo e($CartItem->cart_id); ?>,<?php echo e($CartItem->id); ?>)"> update</button></small>
            </div>
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

                        <!-- <a href="/initiate?p=<?php echo e($CartItem->product_price); ?>"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a> -->
                        <a onclick="return confirm('Are you sure Remove Product.. ?')"
                            href="/RemoveCart/<?php echo e($CartItem->cart_id); ?>"><img
                                src="<?php echo e(URL::to('/')); ?>/images/remove-from-cart-button.jpg" style="margin-left: 20px;"
                                alt=""></a>

                        <!--  -->
                </div>

                <a href="/initiate?p=<?php echo e($CartItem->product_price); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>


                <!-- <a href="/RemoveCart/<?php echo e($CartItem->cart_id); ?>"><button class="btn btn-success"
                        style="margin-left: 82px;">RemoveCart
                    </button> -->
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php } 
            
             else{
            
                echo "Product Cart Is Empty";
            }?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<script>
function CartUpdate1(ProductId) {

    alert(ProductId);
}


function CartUpdate(cartid, product_id) {
    var product_id = product_id;
    // alert(product_id);
    var CartQuantity = $('#' + cartid).val();
    var cartid = cartid;
    // console.log(ProductId);
    // return
    $.ajax({
        url: '/Cartupdate',
        method: 'post',
        data: {
            id: cartid,
            product_id: product_id,
            'quantity': CartQuantity,
            "_token": "<?php echo e(csrf_token()); ?>"
        },
        success: function(data) {
            // return true;
            // $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
            console.log(data);
        }
    });
}


// Userloginshow
</script>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserCartList.blade.php ENDPATH**/ ?>