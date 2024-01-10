<?php $__env->startSection('title', 'Edit country'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/dropify/dist/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit country</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('countries')); ?>">Countries</a></li>
            <li class="breadcrumb-item active">Edit country</li>
        </ol>

        <form method="POST" id="form">
            <?php echo csrf_field(); ?>
            <div class="box box-block bg-white">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter country name" value="<?php echo e($country->title); ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="shipping_price">Shipping price</label>
                            <input name="shipping_price" type="number" class="form-control" id="shipping_price" placeholder="Enter shipping price" value="<?php echo e($country->shipping_price); ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/jquery.validate.js')); ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#form').validate({
            rules: {
                title: { required: true },
            },
            messages: {
                title: { required: "Country name is required" },
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Country/edit.blade.php ENDPATH**/ ?>