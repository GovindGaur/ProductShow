@extends('usershow::layouts.master')
@section('content')

@if(Session()->has('user'))

<input type="hidden" id="user_id" value="{{Session::get('user')['id']}}">

@endif
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
            @foreach($UserProduct as $UserItem)
            <input type="hidden" id="product_id" name="product_id" value="{{$UserItem->id}}">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                @csrf

                <div class="box">
                    <!-- <a href=""> -->
                    <div class="img-box">
                        <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                        <img src="{{$image_file_path}}/{{$UserItem->product_image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>

                            {{$UserItem->product_name}}
                        </h6>
                        <h6 id="product_name">
                            Price:
                            <span>
                                {{$UserItem->product_price}}
                            </span>
                        </h6>
                        <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="cart_id" id="cart_id" value=" {{$UserItem->cart_id}}">
                    <!-- <img src="{{ URL::to('/') }}/images/addtocart.png" onclick="addToCart({{$UserItem->id}})" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="{{$UserItem->id}}">
                        <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart({{$UserItem->id}})"> add to cart</button> -->
                        <span id="product_store_{{$UserItem->id}}">
                            <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                                onclick="addToCart({{$UserItem->id}})" alt="submit Button"
                                onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'"
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
                <a href="/initiate?p={{$UserItem->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>
            </div>


            @endforeach
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
            @foreach($UserProductElectronics as $UserItem)
            <input type="hidden" id="product_id" name="product_id" value="{{$UserItem->id}}">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                @csrf

                <div class="box">
                    <!-- <a href=""> -->
                    <div class="img-box">
                        <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                        <img src="{{$image_file_path}}/{{$UserItem->product_image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>

                            {{$UserItem->product_name}}
                        </h6>
                        <h6 id="product_name">
                            Price:
                            <span>
                                {{$UserItem->product_price}}
                            </span>
                        </h6>
                        <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="cart_id" id="cart_id" value=" {{$UserItem->cart_id}}">
                    <!-- <img src="{{ URL::to('/') }}/images/addtocart.png" onclick="addToCart({{$UserItem->id}})" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="{{$UserItem->id}}">
                        <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart({{$UserItem->id}})"> add to cart</button> -->
                        <span id="product_store_{{$UserItem->id}}">
                            <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                                onclick="addToCart({{$UserItem->id}})" alt="submit Button"
                                onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'"
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
                <a href="/initiate?p={{$UserItem->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>
            </div>


            @endforeach
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

            @foreach($UserProductElectricity as $UserItem)
            <input type="hidden" id="product_id" name="product_id" value="{{$UserItem->id}}">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                @csrf

                <div class="box">
                    <a href="ProductDetail/{{$UserItem->id}}">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="{{$image_file_path}}/{{$UserItem->product_image}}" alt="">
                        </div>
                        <div class="detail-box">

                            <h6>

                                {{$UserItem->product_name}}
                            </h6>
                            <h6 id="product_name">
                                Price:
                                <span>
                                    {{$UserItem->product_price}}
                                </span>
                            </h6>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                    </a>
                </div>

                <input type="hidden" name="cart_id" id="cart_id" value=" {{$UserItem->cart_id}}">
                <!-- <img src="{{ URL::to('/') }}/images/addtocart.png" onclick="addToCart({{$UserItem->id}})" alt=""
                        style="margin-left: 16px;"> -->
                <span id="{{$UserItem->id}}">
                    <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                    <!-- <button onclick="addToCart({{$UserItem->id}})"> add to cart</button> -->
                    <span id="{{$UserItem->id}}">
                        <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                            onclick="addToCart({{$UserItem->id}})" alt="submit Button"
                            onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'" style="margin-left: 16px;">
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
            <a href="/initiate?p={{$UserItem->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png" alt=""
                    style="margin-left: 70px;"></a>
        </div>
        @endforeach
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

            @foreach($UserProductMobile as $UserItem)
            <input type="hidden" id="product_id" name="product_id" value="{{$UserItem->id}}">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                @csrf
                <div class="box">
                    <!-- <a href=""> -->
                    <div class="img-box">
                        <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                        <img src="{{$image_file_path}}/{{$UserItem->product_image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>

                            {{$UserItem->product_name}}
                        </h6>
                        <h6 id="product_name" name="product_name">
                            Price:
                            <span id="span">
                                {{$UserItem->product_price}}
                            </span>
                        </h6>
                        <div class="new">
                            <span>
                                New
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="cart_id" id="cart_id" value="{{$UserItem->cart_id}}">
                    <!-- <img src="{{ URL::to('/') }}/images/addtocart.png" onclick="addToCart({{$UserItem->id}})" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="{{$UserItem->id}}">
                        <?php if(!$UserItem->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart({{$UserItem->id}})"> add to cart</button> -->
                        <span id="product_store_{{$UserItem->id}}">
                            <input type="image" value="button" id="click" src="{{ URL::to('/') }}/images/addtocart.png"
                                onclick="addToCart({{$UserItem->id}})" alt="submit Button"
                                onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'"
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
                <a href="/initiate?p={{$UserItem->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>

                <a href="/razorpay-payment?p={{$UserItem->product_price}}">Razory Pay</a>
            </div>


            @endforeach
        </div>
        <div class="btn-box">
            <a href="/FetchmMbileData">
                View All
            </a>
        </div>
    </div>
</section>

@endsection
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
                        "_token": "{{ csrf_token() }}"
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
                "_token": "{{ csrf_token() }}"
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
    //         "_token": "{{ csrf_token() }}"
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