<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-area p-y-1">
    <div class="container-fluid">
        <form  method="post">
                    <?php echo csrf_field(); ?>
                    <label for="start_date">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" require >

                    <label for="end_date">End Date:</label>
                    <input type="date" id="end_date" name="end_date" require >

                    <button type="submit" >Filter Data</button>
                </form>
        <div class="row row-md">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-danger m-b-2">
                    <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1"><?php echo e($orders); ?></h1>
                        <h6 class="text-uppercase">Total Orders</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-success m-b-2">
                    <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1"><?php echo e($revenue); ?> $</h1>
                        <h6 class="text-uppercase">Revenue</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-primary m-b-2">
                    <div class="t-icon right"><i class="ti-package"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1"><?php echo e($products); ?></h1>
                        <h6 class="text-uppercase">Products</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-warning m-b-2">
                    <div class="t-icon right"><i class="ti-receipt"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1"><?php echo e($users); ?></h1>
                        <h6 class="text-uppercase">Users</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\Projects\laplain.ae\resources\views/BackEnd/Dashboard/index.blade.php ENDPATH**/ ?>