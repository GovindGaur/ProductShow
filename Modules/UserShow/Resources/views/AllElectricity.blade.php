@extends('usershow::layouts.master')
@section('content')

@if(Session()->has('user'))

<input type="hidden" id="user_id" value="{{Session::get('user')['id']}}">


@endif
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                All Electronics Product
            </h2>
        </div>
        <div class="row">
            @foreach($UserProductElectricity as $UserItem)
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
                        <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                            onclick="addToCart({{$UserItem->id}})" alt="submit Button"
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
                <a href="/initiate?p={{$UserItem->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png"
                        alt="" style="margin-left: 70px;"></a>
            </div>


            @endforeach

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