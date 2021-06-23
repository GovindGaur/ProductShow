<?php $__env->startSection('content'); ?>

<?php if(Session()->has('user')): ?>

<input type="hidden" id="user_id" value="<?php echo e(Session::get('user')['id']); ?>">


<?php endif; ?>

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

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                All Electronics Product
            </h2>
        </div>
        <div class="row">

            <input type="hidden" id="product_id" name="product_id" value="<?php echo e($ProductDetail->id); ?>">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                <?php echo csrf_field(); ?>

                <div class="box">
                    <!-- <a href=""> -->
                    <div class="img-box">
                        <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                        <img src="<?php echo e($image_file_path); ?>/<?php echo e($ProductDetail->product_image); ?>" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>

                            <?php echo e($ProductDetail->product_name); ?>

                        </h6>
                        <h6 id="product_name">
                            Price:
                            <span>
                                <?php echo e($ProductDetail->product_price); ?>

                            </span>
                        </h6>
                        <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                    </div>
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max=""
                            name="quantity" id="quantity" value="1" title="Qty" class="input-text qty text" size="4"
                            pattern="" inputmode=""><input type="button" value="+" class="plus">
                    </div>
                    <input type="hidden" name="cart_id" id="cart_id" value=" <?php echo e($ProductDetail->cart_id); ?>">
                    <!-- <img src="<?php echo e(URL::to('/')); ?>/images/addtocart.png" onclick="addToCart(<?php echo e($ProductDetail->id); ?>)" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="<?php echo e($ProductDetail->id); ?>">
                        <?php if(!$ProductDetail->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart(<?php echo e($ProductDetail->id); ?>)"> add to cart</button> -->
                        <input type="image" value="button" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                            onclick="addToCart(<?php echo e($ProductDetail->id); ?>)" alt="submit Button"
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
                <a href="/initiate?p=<?php echo e($ProductDetail->product_price); ?>"><img
                        src="<?php echo e(URL::to('/')); ?>/images/buy12edit.png" alt="" style="margin-left: 70px;"></a>
            </div>



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
    var quantity = $('#quantity').val();
    alert(quantity);
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
                quantity: quantity,
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
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/ProductDetail.blade.php ENDPATH**/ ?>