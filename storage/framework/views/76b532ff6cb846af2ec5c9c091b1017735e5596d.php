<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SellerShow</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="/SellerUpdate" method="Post" enctype="multipart/form-data"
                style="margin-left: 250px;margin-top: 22px;">
                <?php echo e(csrf_field()); ?>

                <!-- <h2>Product</h2> -->
                <input type="hidden" name="id" value="<?php echo e($Seller_data['id']); ?>">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="productName" id="productName" class="form-control" style="width: 500px;"
                        value="<?php echo e($Seller_data['product_name']); ?>">
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" name="productPrice" id="productPrice" class="form-control" style="width: 500px;"
                        value="<?php echo e($Seller_data['product_price']); ?>">
                </div>
                <div class="form-group">
                    <label for="">Product Desc</label>
                    <input type="text" name="product_desc" id="product_desc" class="form-control" style="width: 500px;"
                        value="<?php echo e($Seller_data['product_desc']); ?>">
                </div>

                <div class="form-group">
                    <label for="">Product Categery</label>
                    <!-- <input type="text" name="productCategery" id="productCategery" class="form-control"
                        style="width: 500px;" value="<?php echo e($Seller_data['product_categery']); ?>"> -->

                    <select value="<?php echo e($Seller_data['product_categery']); ?>" name="productCategery" class="form-control"
                        style="width: 500px;">
                        <option <?php echo e(($Seller_data['product_categery']) == 'Mobile' ? 'selected' : ''); ?> value="Mobile">
                            Mobile</option>
                        <option <?php echo e(($Seller_data['product_categery']) == 'Electricity' ? 'selected' : ''); ?>

                            value="Electricity">
                            Electricity
                        </option>
                        <option <?php echo e(($Seller_data['product_categery']) == 'Electronics' ? 'selected' : ''); ?>

                            value="Electronics">Electronics
                        </option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Product SubCategery</label>
                    <input type="text" name="productSubCategery" id="productSubCategery" class="form-control"
                        style="width: 500px;" value="<?php echo e($Seller_data['product_sub_categery']); ?>">

                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="file" name="file" id="file" class="form-control" style="width: 500px;"
                        value="<?php echo e($Seller_data['product_image']); ?>">
                    <input type="hidden" name="hidden_image" value="<?php echo e($Seller_data['product_image']); ?>">
                    <!-- <img src="" alt=""> -->
                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
            </form>
        </div>
    </section> <!-- /.container-fluid -->

</div>

<?php $__env->stopSection(); ?>
<!-- end content wrapper-->
<?php echo $__env->make('sellershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/SellerShow\Resources/views/seller_edit.blade.php ENDPATH**/ ?>