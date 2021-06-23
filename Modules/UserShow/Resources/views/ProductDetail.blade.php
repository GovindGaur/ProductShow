@extends('usershow::layouts.master')
@section('content')

@if(Session()->has('user'))

<input type="hidden" id="user_id" value="{{Session::get('user')['id']}}">


@endif

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
<link rel="stylesheet" href="{{ Module::asset('UserShow:css/style.css') }} " />
<script src="http://localhost/Product_show/Modules/UserShow/Resources/assets/js/script.js"></script>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                All Electronics Product
            </h2>
        </div>
        <div class="row">

            <input type="hidden" id="product_id" name="product_id" value="{{$ProductDetail->id}}">
            <div class="col-sm-6 col-xl-3">
                <!-- <form method="Post" action="/addToCart"> -->
                @csrf

                <div class="box">
                    <!-- <a href=""> -->
                    <div class="img-box">
                        <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                        <img src="{{$image_file_path}}/{{$ProductDetail->product_image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>

                            {{$ProductDetail->product_name}}
                        </h6>
                        <h6 id="product_name">
                            Price:
                            <span>
                                {{$ProductDetail->product_price}}
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
                    <input type="hidden" name="cart_id" id="cart_id" value=" {{$ProductDetail->cart_id}}">
                    <!-- <img src="{{ URL::to('/') }}/images/addtocart.png" onclick="addToCart({{$ProductDetail->id}})" alt=""
                        style="margin-left: 16px;"> -->
                    <span id="{{$ProductDetail->id}}">
                        <?php if(!$ProductDetail->cart_id || !Session::get('user')['id']){ ?>
                        <!-- <button onclick="addToCart({{$ProductDetail->id}})"> add to cart</button> -->
                        <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                            onclick="addToCart({{$ProductDetail->id}})" alt="submit Button"
                            onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'" style="margin-left: 16px;">
                        <?php }else{ ?>
                        <a href="CartList" id="CartList">Go To Cart</a>
                        <!-- <div id="gotocart"></div> -->

                        <?php } ?>
                    </span>
                    <!-- <button class=" btn btn-success" type="submit" style="margin-left: 52px;">Add To Cart
                    </button> -->
                    <!-- </form> -->
                </div>
                <a href="/initiate?p={{$ProductDetail->product_price}}"><img
                        src="{{ URL::to('/') }}/images/buy12edit.png" alt="" style="margin-left: 70px;"></a>
            </div>



        </div>
        <!-- <div class="btn-box">
            <a href="/FetchAllProduct">
                View All
            </a>
        </div> -->
    </div>
</section>

@endsection
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
                "_token": "{{ csrf_token() }}"
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