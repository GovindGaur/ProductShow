@extends('usershow::layouts.master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Result for Product</h2>
            @foreach($product as $item)

            <div class="search-item">
                <div class="">
                    <h2>{{$item->product_name}}</h2>
                    <h5>{{$item->product_price}}</h5>
                    <p>{{$item->product_desc}}</p>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</div>
@endsection