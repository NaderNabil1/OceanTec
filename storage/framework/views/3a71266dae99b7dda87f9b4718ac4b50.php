<?php $__env->startSection('title', 'Edit page'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/dropify/dist/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit page</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('pages')); ?>">Pages</a></li>
            <li class="breadcrumb-item active">Edit page</li>
        </ol>

        <form method="POST" id="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="box box-block bg-white">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter page title" value="<?php echo e($page->title); ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="meta_title">Meta title</label>
                            <input type="text" name="meta_title" class="form-control" id="title_ar" placeholder="Enter meta title" value="<?php echo e($page->meta_title); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" rows="4" class="form-control" id="description" placeholder="Enter page description"><?php echo e($page->description); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="meta_description">Meta description</label>
                            <textarea name="meta_description" rows="4" id="meta_description" class="form-control" placeholder="Enter meta description"><?php echo e($page->meta_description); ?></textarea>
                        </div>
                    </div>
                </div>
                <?php if($page->id == 1): ?>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video</label>
                            <input name="video" class="form-control" id="video" placeholder="Video" value="<?php echo e($video->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video Title</label>
                            <input name="video_title" class="form-control" id="video_title" placeholder="Video Title" value="<?php echo e($video_title->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video Link</label>
                            <input name="video_link" class="form-control" id="video_link" placeholder="Video Link" value="<?php echo e($video_link->value); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="video_description">Video description</label>
                            <textarea name="video_description" rows="4" id="meta_description" class="form-control" placeholder="Enter Video description"><?php echo e($video_description->value); ?></textarea>
                        </div>
                    </div>
                </div>
                <?php endif; ?>


                <?php if($page->id == 2): ?>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Mission</label>
                            <textarea name="mission" rows="4" class="form-control" id="mission" placeholder="Enter mission"><?php echo e($mission->value); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Vision</label>
                            <textarea name="vision" rows="4" class="form-control" id="vision" placeholder="Enter vision"><?php echo e($vision->value); ?></textarea>
                        </div>
                    </div>
                </div>
                <?php elseif($page->id == 3): ?>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone" value="<?php echo e($phone->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Enter email" value="<?php echo e($email->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input name="facebook" type="text" class="form-control" id="facebook" placeholder="Enter Facebook page URL" value="<?php echo e($facebook->value); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input name="instagram" type="text" class="form-control" id="instagram" placeholder="Enter Instagram page URL" value="<?php echo e($instagram->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input name="youtube" type="text" class="form-control" id="youtube" placeholder="Enter youtube channel URL" value="<?php echo e($youtube->value); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="tiktok">Tiktok</label>
                            <input name="tiktok" type="text" class="form-control" id="tiktok" placeholder="Enter Tiktok account URL" value="<?php echo e($tiktok->value); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M" <?php if($page->image != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $page->image); ?>" <?php endif; ?>>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Cover</label><br>
                            <input type="file" name="cover" class="dropify" id="image" data-max-file-size="2M" <?php if($page->cover != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $page->cover); ?>" <?php endif; ?>>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Meta image</label><br>
                            <input type="file" name="meta_image" class="dropify" id="image" data-max-file-size="2M" <?php if($page->meta_image != ''): ?> data-default-file="<?php echo e(url('/uploads') . '/' . $page->meta_image); ?>" <?php endif; ?>>
                        </div>
                    </div>
                </div>

                <?php if($page->id != 1 && $page->id != 2 && $page->id != 3): ?>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" class="custom-control-input" <?php echo e($page->status == 'Published' ? 'checked' : ''); ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Publish</span>
                            </label>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Save</button>
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

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Page/edit.blade.php ENDPATH**/ ?>