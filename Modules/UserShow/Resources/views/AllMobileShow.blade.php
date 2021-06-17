@extends('usershow::layouts.master')
@section('content')
<section class="shop_section layout_padding">
    <div class="container">
        <div class="row">
        @foreach($UserProductMobile as $UserMobile)
            <div class="col-sm-6 col-xl-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <?php 
                            $image_file_path = env('IMAGE_PATH');
                            ?>
                            <img src="{{$image_file_path}}/{{$UserMobile->product_image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{$UserMobile->product_name}}
                            </h6>
                            <h6>
                                Price:
                                <span>
                                    {{$UserMobile->product_price}}
                                </span>
                            </h6>
                        </div>
                        <a href="/initiate?p={{$UserMobile->product_price}}"><button class="btn btn-success"
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
    
    
    
    
    
   