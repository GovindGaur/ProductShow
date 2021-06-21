@extends('usershow::layouts.master')
@section('content')

@if(Session()->has('user'))

<input type="hidden" id="user_id" value="{{Session::get('user')['id']}}">


@endif
<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            <?php if(count($product)>0){?>
            @foreach($product as $item)
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="{{$image_file_path}}/{{$item->product_image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{$item->product_name}}
                            </h6>
                            <h6>
                                Price:
                                <span>
                                    {{$item->product_price}}
                                </span>
                            </h6>
                        </div>
                        <!-- <a href="/initiate?p={{$item->product_price}}"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a> -->
                        <span id="{{$item->id}}">
                            <?php if(!$item->cart_id || !Session::get('user')['id']){ ?>
                            <!-- <button onclick="addToCart({{$item->id}})"> add to cart</button> -->
                            <input type="image" value="button" src="{{ URL::to('/') }}/images/addtocart.png"
                                onclick="addToCart({{$item->id}})" alt="submit Button"
                                onMouseOver="this.src='{{ URL::to('/') }}/images/addtocart.png'"
                                style="margin-left: 16px;">
                            <?php }else{ ?>
                            <a href="CartList" id="CartList">Go To Cart</a>
                            <!-- <div id="gotocart"></div> -->

                            <?php } ?>
                        </span>
                    </a>
                </div>
                <a href="/initiate?p={{$item->product_price}}"><img src="{{ URL::to('/') }}/images/buy12edit.png" alt=""
                        style="margin-left: 70px;"></a>
            </div>

            @endforeach
            <?php } 
            
            else{ ?>

            <div class="page-wrap d-flex flex-row align-items-center">
                <div class="container">
                    <div class="row justify-content-center" style="margin-left: 342px;">
                        <div class="col-md-12 text-center">
                            <span class="display-1 d-block">404</span>
                            <div class="mb-4 lead">The page you are looking for was not found.</div>
                            <a href="/" class="btn btn-link">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>



            <?php } ?>
        </div>
    </div>
</section>
<style>
body {
    background: #dedede;
}

.page-wrap {
    min-height: 50vh;
}
</style>
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