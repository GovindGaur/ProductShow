@extends('usershow::layouts.master')
@section('content')

<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            @foreach($CartList as $CartItem)
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="{{$image_file_path}}/{{$CartItem->product_image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{$CartItem->product_name}}
                            </h6>
                            <h6>
                                Price:
                                <span>
                                    {{$CartItem->product_price}}
                                </span>
                            </h6>
                        </div>
                        <a href="/initiate?p={{$CartItem->product_price}}"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a>
                </div>
                <a href="/RemoveCart/{{$CartItem->cart_id}}"><button class="btn btn-success"
                                style="margin-left: 82px;">RemoveCart
                            </button>
            </div>
            
            @endforeach
        </div>
    </div>
</section>

@endsection