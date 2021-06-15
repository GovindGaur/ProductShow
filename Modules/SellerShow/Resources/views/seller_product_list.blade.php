@extends('sellershow::layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">SellerShow</li>
                            <li class="breadcrumb-item active">Show Product</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Categery</th>
                            <th>Product Categery</th>
                            <th>Product Desc</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($SellerProduct as $SellerItem)
                        <tr>
                            <td> {{ $SellerItem->product_name}}</td>
                            <td> {{ $SellerItem->product_price}}</td>
                            <td> {{ $SellerItem->product_categery}}</td>
                            <td> {{ $SellerItem->product_sub_categery}}</td>
                            <td> {{ $SellerItem->product_desc}}</td>
                            <td>
                                <img src="http://localhost/product_show/storage/app/public/SellerProductImages/{{$SellerItem->product_image}}"
                                    alt="" height="50px" width="50px">
                            </td>
                            <td>
                                <a href="Selleredit/{{$SellerItem->id}}">Edit</a>
                                <a href="Sellerdelete/{{$SellerItem->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section> <!-- /.container-fluid -->

    </div>
    <!-- end content wrapper-->
</body>

</html>
@endsection