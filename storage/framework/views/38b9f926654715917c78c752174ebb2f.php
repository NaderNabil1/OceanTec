<?php $__env->startSection('title', 'Add banner'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/dropify/dist/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Add banner</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('banners')); ?>">Banners</a></li>
            <li class="breadcrumb-item active">Add banner</li>
        </ol>

        <form method="POST" id="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="box box-block bg-white">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="">Link</label>
                            <input name="link" type="text" class="form-control" id="link" placeholder="Enter banner link">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Publish</span>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/ckeditor.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/dropify/dist/js/dropify.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/jquery.validate.js')); ?>"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify();
        $('#form').validate({
            rules: {
                title: { required: true },
            },
            messages: {
                title: { required: "Page title is required" },
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\laplain.ae\resources\views/BackEnd/Banner/add.blade.php ENDPATH**/ ?>