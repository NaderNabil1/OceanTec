<?php $__env->startSection('title', 'Add product'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/dropify/dist/css/dropify.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Add product</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('be-products')); ?>">Products</a></li>
            <li class="breadcrumb-item active">Add product</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="row">
                <div class="col-md-6 col-xs-12"><h5 class="m-b-1">Add product</h5></div>
            </div>

            <div class="box box-block bg-white">
                <form method="post" id="form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="meta_title">Meta title</label>
                                <input type="text" name="meta_title" class="form-control" id="title_ar" placeholder="Enter meta title">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" name="code" class="form-control" id="code" placeholder="Enter product code">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Please select category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="palette">Color</label>
                                <select class="form-control palette" name="color">
                                    <option value="">Please select color</option>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($color->id); ?>"><?php echo e($color->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Enter product price">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="sale_price">Sale price</label>
                                <input type="number" name="sale_price" class="form-control" id="price" placeholder="Enter product sale price">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="sale_end_date">Sale end date</label>
                                <input type="date" name="sale_end_date" class="form-control" id="sale_end_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" rows="4" id="description" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="meta_description">Meta description</label>
                                <textarea name="meta_description" rows="4" id="meta_description" class="form-control" placeholder="Enter meta description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="video">Video</label>
                                <input type="text" name="video" class="form-control" id="video" placeholder="Enter product video URL">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M">
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <div class="form-group">
                                <label for="image_two">Image Hover</label>
                                <input type="file" name="image_two" class="dropify" id="image_two" data-max-file-size="2M">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="gallery">Gallery</label>
                                <input type="file" name="gallery[]" multiple class="dropify" id="image" data-max-file-size="2M">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12"><h4>Sizes & Stocks</h4><div>
                        <hr/>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-xs-12">
                            <div class="form-group">
                                <label for="size"><?php echo e($size->title); ?></label>
                                <input type='number' min='0' name='size-<?php echo e($key); ?>' class="form-control">
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/select2/dist/js/select2.min.js')); ?>"></script>
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
        $('[data-plugin="select2"]').select2($(this).attr('data-options'));
        $('#form').validate({
            rules: {
                title: { required: true }
            },
            messages: {
                title: { required: "Title is required" }
            }
        });
    });
</script>
<script>
$("body").on('change', "#category", (function () {
    var $id = $(this).val();
    var $this = $(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "<?php echo e(Route('get-subcategories')); ?>",
        data: {
            id: $id
        },
        success: function (result) {
        if (result && result?.status === "success") {
            if(result?.categories != null){
                $('.subcategory').empty();
                for (const category of result?.categories) {
                    var $name = category['title'];
                    var $id = category['id'];
                    $('.subcategory').append('<option value="' + $id + '">' + $name + '</option>');
                }
                $('.subcategory').prop("disabled", false);
                $('.palette').empty();
                for (const palette of result?.palettes) {
                    var $name = palette['title'];
                    var $id = palette['id'];
                    $('.palette').append('<option value="' + $id + '">' + $name + '</option>');
                }
                $('.palette').prop("disabled", false);
            }
        }},
        error: function (result) {
            console.log("error", result);
        },
    });
}));
$("body").on('change', ".category", (function () {
    var $id = $(this).val();
    var $this = $(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "<?php echo e(Route('get-palettes')); ?>",
        data: {
            id: $id
        },
        success: function (result) {
        if (result && result?.status === "success") {
            if(result?.data == null){

            } else {
                $this.parent().parent().parent().find('.palette').empty();
                for (const store of result?.data) {
                    var $name = palette['title'];
                    var $id = palette['palette']['id'];
                    $this.parent().parent().parent().find('.palette').append('<option value="' + $id + '">' + $name + ' - ' + $stock + ' Items </option>');
                }
                $this.parent().parent().parent().find('.palette').prop("disabled", false);
            }
        }},
        error: function (result) {
            console.log("error", result);
        },
    });
}));
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Product/add.blade.php ENDPATH**/ ?>