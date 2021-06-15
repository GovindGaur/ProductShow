<?php $__env->startSection('content'); ?>
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
                        <li class="breadcrumb-item"><a href="#">Add Product</a></li>
                        <li class="breadcrumb-item active">Inline Charts</li>
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
                <?php echo e(csrf_field()); ?>

                <!-- <h2>Product</h2> -->
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="productName" id="productName" class="form-control" style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" name="productPrice" id="productPrice" class="form-control" style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Desc</label>
                    <input type="text" name="productDesc" id="productDesc" class="form-control" style="width: 500px;">
                </div>

                <div class="form-group">
                    <label for="">Product Categery</label>
                    <input type="text" name="productCategery" id="productCategery" class="form-control"
                        style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product SubCategery</label>
                    <input type="text" name="productSubCategery" id="productSubCategery" class="form-control"
                        style="width: 500px;">
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="file" name="file" id="file" class="form-control" style="width: 500px;">
                    <!-- <img src="" alt=""> -->
                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>



            </form>
        </div>
    </section> <!-- /.container-fluid -->

</div>
<!-- end content wrapper-->



</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sellershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/SellerShow\Resources/views/product_show.blade.php ENDPATH**/ ?>