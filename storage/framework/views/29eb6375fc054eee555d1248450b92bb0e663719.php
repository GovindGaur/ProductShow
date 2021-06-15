<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Payment gateway using Paytm</title>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container" width="500px">
        <div class="panel panel-primary" style="margin-top:110px;">
            <div class="panel-heading">
                <h3 class="text-center">Payment gateway</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(route('make.payment')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <?php if($message = Session::get('message')): ?>
                    <p><?php echo $message; ?></p>
                    <?php Session::forget('success'); ?>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-12">
                            <strong>Mobile No:</strong>
                            <input type="text" name="mobile" class="form-control" maxlength="10"
                                placeholder="Mobile No." required>
                        </div>
                        <div class="col-md-12">
                            <strong>Email:</strong>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="col-md-12">
                            <br />
                            <div class="btn btn-info">
                                <input type="hidden" class="form-control" placeholder="amount" name="amount"
                                    value="<?php echo e($amount); ?>">
                                Amount: <?php echo e($amount); ?> Rs/-
                            </div>

                        </div>
                        <div class="col-md-12">
                            <br />
                            <button type="submit" class="btn btn-success">Paytm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('usershow::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Product_show\Modules/UserShow\Resources/views/paytm.blade.php ENDPATH**/ ?>