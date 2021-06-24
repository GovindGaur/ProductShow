<?php $__env->startSection('content'); ?>

<?php if(Session()->has('user')): ?>

<input type="hidden" id="user_id" value="<?php echo e(Session::get('user')['id']); ?>">

<?php endif; ?>
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
                Latest All Product
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
                        <span id="product_store_<?php echo e($UserItem->id); ?>">
                            <input type="image" value="button" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                                onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt="submit Button"
                                onMouseOver="this.src='<?php echo e(URL::to('/')); ?>/images/addtocart.png'"
                                style="margin-left: 16px;">
                        </span>
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
        <div class="btn-box">
            <a href="/FetchAllProduct">
                View All
            </a>
        </div>
    </div>
</section>


<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Electronics
            </h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $UserProductElectronics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <span id="product_store_<?php echo e($UserItem->id); ?>">
                            <input type="image" value="button" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                                onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt="submit Button"
                                onMouseOver="this.src='<?php echo e(URL::to('/')); ?>/images/addtocart.png'"
                                style="margin-left: 16px;">
                        </span>
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
        <div class="btn-box">
            <a href="/FetchElectronicsData">
                View All
            </a>
        </div>
    </div>
</section>


<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Electricity
            </h2>
        </div>
        <div class="row">

            <?php $__currentLoopData = $UserProductElectricity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" id="product_id" name="product_id" value="<?php echo e($UserItem->id); ?>">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                <?php echo csrf_field(); ?>

                <div class="box">
                    <a href="ProductDetail/<?php echo e($UserItem->id); ?>">
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
                    </a>
                </div>

                <input type="hidden" name="cart_id" id="cart_id" value=" <?php echo e($UserItem->cart_id); ?>">
                <!-- <img src="<?php echo e(URL::to('/')); ?>/images/addtocart.png" onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt=""
                        style="margin-left: 16px;"> -->
                <span id="<?php echo e($UserItem->id); ?>">
                    <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                    <!-- <button onclick="addToCart(<?php echo e($UserItem->id); ?>)"> add to cart</button> -->
                    <span id="<?php echo e($UserItem->id); ?>">
                        <input type="image" value="button" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                            onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt="submit Button"
                            onMouseOver="this.src='<?php echo e(URL::to('/')); ?>/images/addtocart.png'" style="margin-left: 16px;">
                    </span>
                    <?php }else{ ?>
                    <a href="CartList" id="CartList">Go To Cart</a>
                    <!-- <div id="gotocart"></div> -->

                    <?php } ?>
                </span>
                <!-- <button class=" btn btn-success" type="submit" style="margin-left: 52px;">Add To Cart
                    </button> -->
                <!-- </form> -->
            </div>
            <a href="/initiate?p=<?php echo e($UserItem->product_price); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/buy12edit.png" alt=""
                    style="margin-left: 70px;"></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="btn-box">
        <a href="/FetchElectricityData">
            View All
        </a>
    </div>
    </div>
</section>





<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Mobile
            </h2>
        </div>
        <div class="row">

            <?php $__currentLoopData = $UserProductMobile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <h6 id="product_name" name="product_name">
                            Price:
                            <span id="span">
                                <?php echo e($UserItem->product_price); ?>

                            </span>
                        </h6>
                        <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="cart_id" id="cart_id" value="<?php echo e($UserItem->cart_id); ?>">
                    <!-- <img src="<?php echo e(URL::to('/')); ?>/images/addtocart.png" onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="<?php echo e($UserItem->id); ?>">
                        <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart(<?php echo e($UserItem->id); ?>)"> add to cart</button> -->
                        <span id="product_store_<?php echo e($UserItem->id); ?>">
                            <input type="image" value="button" id="click" src="<?php echo e(URL::to('/')); ?>/images/addtocart.png"
                                onclick="addToCart(<?php echo e($UserItem->id); ?>)" alt="submit Button"
                                onMouseOver="this.src='<?php echo e(URL::to('/')); ?>/images/addtocart.png'"
                                style="margin-left: 16px;">
                        </span>
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

                <a href="/razorpay-payment?p=<?php echo e($UserItem->product_price); ?>">Razory Pay</a>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
let ProductId;
// let UserId = $('#user_id').val();
// console.log(UserId);
$(document).ready(function() {
    let productStoreArr = localStorage.getItem('demoObject') ? JSON.parse(localStorage.getItem('demoObject')) :
        [];
    if (productStoreArr && productStoreArr.length) {
        productStoreArr.map((storeVal) => {
            console.log($('#product_store_' + storeVal))
            if (document.getElementById('product_store_' +
                    storeVal)) // use this if you are using id to check
            {
                $('#product_store_' + storeVal).html("<a href='/CartList'>Go to cart</a>")
            }
            let UserId = $('#user_id').val();
            if (UserId != undefined) {
                $.ajax({
                    url: '/addToCart',
                    method: 'post',
                    data: {
                        product_id: storeVal,
                        quantity: 1,
                        "_token": "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        // return true;
                        // $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
                        console.log(data);
                        localStorage.clear();
                    }
                });

            }
        })

    }
})

function addToCart(ProductId) {
    let UserId = $('#user_id').val();
    console.log(UserId);
    var ProductId = ProductId
    // return
    if (UserId != undefined) {
        $.ajax({
            url: '/addToCart',
            method: 'post',
            data: {
                product_id: ProductId,
                quantity: 1,
                "_token": "<?php echo e(csrf_token()); ?>"
            },
            success: function(data) {
                // return true;
                $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
                console.log(data);
            }
        });
    } else {
        var getDemoObjectData = localStorage.getItem('demoObject') ? JSON.parse(localStorage.getItem('demoObject')) :
    [];
        if (getDemoObjectData && getDemoObjectData.length) {
            if (getDemoObjectData.includes(ProductId)) {} else {
                getDemoObjectData.push(ProductId)
            }
        } else {
            getDemoObjectData = [ProductId]
        }
        var demoObject = {
            'ProductId': ProductId,
        };
        // save object into local storage with key 'demoObject'
        localStorage.setItem('demoObject', JSON.stringify(getDemoObjectData));
        // var getDemoObjectData = localStorage.getItem('demoObject');
        console.log(getDemoObjectData);
        $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
    }
    // $.ajax({
    //     url: '/addToCart',
    //     method: 'post',
    //     data: {
    //         product_id: ProductId,
    //         quantity: 1,
    //         "_token": "<?php echo e(csrf_token()); ?>"
    //     },
    //     success: function(data) {
    //         // return true;
    //         $('#' + ProductId).html("<a href='/CartList'>Go to cart</a>")
    //         console.log(data);
    //     }
    // });
    // else {
    //     // alert("here...");
    //     window.location.href = 'http://127.0.0.1:8000/Userloginshow';
    //     return false;
    // }
    // Userloginshow
}
</script>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/UserDashboard.blade.php ENDPATH**/ ?>