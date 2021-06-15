<?php $__env->startSection('content'); ?>
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
                        <?php $__currentLoopData = $SellerProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SellerItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($SellerItem->product_name); ?></td>
                            <td> <?php echo e($SellerItem->product_price); ?></td>
                            <td> <?php echo e($SellerItem->product_categery); ?></td>
                            <td> <?php echo e($SellerItem->product_sub_categery); ?></td>
                            <td> <?php echo e($SellerItem->product_desc); ?></td>
                            <td>
                                <img src="http://localhost/product_show/storage/app/public/SellerProductImages/<?php echo e($SellerItem->product_image); ?>"
                                    alt="" height="50px" width="50px">
                            </td>
                            <td>
                                <a href="Selleredit/<?php echo e($SellerItem->id); ?>">Edit</a>
                                <a href="Sellerdelete/<?php echo e($SellerItem->id); ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </section> <!-- /.container-fluid -->

    </div>
    <!-- end content wrapper-->
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sellershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/SellerShow\Resources/views/seller_product.blade.php ENDPATH**/ ?>