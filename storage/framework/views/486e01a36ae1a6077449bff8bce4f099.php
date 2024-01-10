<?php $__env->startSection('title', 'Edit category'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/dropify/dist/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit category</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('be-categories')); ?>">Categories</a></li>
            <?php if($category->parent != NULL): ?>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('be-subcategories', $category->Category->id)); ?>"><?php echo e($category->Category->title); ?> subcategories</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active">Edit category</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="row">
                <div class="col-md-6 col-xs-12"><h5 class="m-b-1">Edit category</h5></div>
            </div>

            <div class="box box-block bg-white">
                <form method="post" id="form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter category title" value="<?php echo e($category->title); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" rows="4" id="description" class="form-control" placeholder="Enter category description"><?php echo e($category->description); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php if($category->parent != NULL): ?>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="return_policy">Return policy</label>
                                <textarea name="return_policy" rows="4" id="return_policy" class="form-control" placeholder="Enter return policy"><?php echo e($category->return_policy); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M" <?php if($category->image != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $category->image); ?>" <?php endif; ?>>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input type="file" name="cover" class="dropify" id="cover" data-max-file-size="2M" <?php if($category->cover != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $category->cover); ?>" <?php endif; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="banner">Banner</label>
                                <input type="file" name="banner" class="dropify" id="banner" data-max-file-size="2M" <?php if($category->banner != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $category->banner); ?>" <?php endif; ?>>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="side_banner">Side banner</label>
                                <input type="file" name="side_banner" class="dropify" id="side_banner" data-max-file-size="2M" <?php if($category->side_banner != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $category->side_banner); ?>" <?php endif; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="status" class="custom-control-input" <?php echo e($category->status == 'Published' ? 'checked' : ''); ?>>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Publish</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/ckeditor.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/jquery.validate.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/dropify/dist/js/dropify.min.js')); ?>"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#return_policy' ) )
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
                description: { required: true },
            },
            messages: {
                title: { required: "Title is required" },
                description: { required: "Description is required" },
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Category/edit.blade.php ENDPATH**/ ?>