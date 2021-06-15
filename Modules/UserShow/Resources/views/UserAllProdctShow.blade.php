@extends('usershow::layouts.master')
@section('content')


<div class="row">
    @foreach($UserProduct as $UserItem)
    <div class="col-md-2 p-5 ">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top"
                src="http://localhost/product_show/storage/app/public/SellerProductImages/{{$UserItem->product_image}}"
                height="100px" width="100px">
            <div class="card-body">
                <p class="card-text"><b> {{$UserItem->product_name}}</b></p>
                <p class="card-text"><b> {{$UserItem->product_price}}</b></p>
                <p class="card-text"><b> {{$UserItem->product_desc}}</b></p>
                <a href="/initiate?p={{$UserItem->product_price}}"><button class="btn btn-success">Buy </button></a>
            </div>
        </div>
        <div>

        </div>
    </div>

    @endforeach
</div>




@endsection