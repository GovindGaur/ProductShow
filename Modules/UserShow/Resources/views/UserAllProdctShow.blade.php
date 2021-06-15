@extends('usershow::layouts.master')
@section('content')


<!-- <div class="row"> -->
<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
            @foreach($UserProduct as $UserItem)
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
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
                            <h6>
                                Price:
                                <span>
                                    {{$UserItem->product_price}}
                                </span>
                            </h6>
                        </div>
                        <a href="/initiate?p={{$UserItem->product_price}}"><button class="btn btn-success"
                                style="margin-left: 82px;">Buy
                            </button></a>

                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection