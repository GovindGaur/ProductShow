@extends('sellershow::layouts.master')
@section('content')
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SellerShow</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="/product_upload" method="Post" enctype="multipart/form-data"
                style="margin-left: 250px;margin-top: 22px;">
                {{ csrf_field() }}
                <!-- <h2>Product</h2> -->
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="productName" id="productName" placeholder="Enter Product Name"
                        class="form-control" style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" name="productPrice" id="productPrice" placeholder="Enter Product Price"
                        class="form-control" style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Desc</label>
                    <input type="text" name="productDesc" id="productDesc" placeholder="Enter Product Description"
                        class="form-control" style="width: 500px;">
                </div>

                <div class="form-group">
                    <label for="">Product Categery</label>
                    <select value="" name="productCategery" class="form-control" style="width: 500px;">
                        <option class='form-control' name="" id="" value="Mobile">Mobile</option>
                        <option class='form-control' name="" id="">Electronics</option>
                        <option class='form-control' name="" id="">Electricity</option>
                        <option class='form-control' name="" id="">Cell Phones & Accessories</option>
                        <option class='form-control' name="" id="">Clothing, Shoes and Jewelry</option>
                        <option class='form-control' name="" id="">Movies & TV</option>
                        <option class='form-control' name="" id="">Toys & Games </option>
                    </select>
                    <!-- <input type="text" name="productCategery" id="productCategery" class="form-control"
                        style="width: 500px;"> -->
                </div>
                <div class="form-group">
                    <label for="">Product SubCategery</label>
                    <input type="text" name="productSubCategery" placeholder="Enter Product SubCategery"
                        id="productSubCategery" class="form-control" style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="file" name="file" id="file" class="form-control" style="width: 500px;">
                    <!-- <img src="" alt=""> -->
                </div>
                <div>
                    <button type="submit" class="btn btn-success" style="margin-left: 203px;">Save</button>
                </div>



            </form>
        </div>
    </section> <!-- /.container-fluid -->

</div>
<!-- end content wrapper-->



</body>

</html>
@endsection