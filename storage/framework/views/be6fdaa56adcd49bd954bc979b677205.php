<?php $__env->startSection('title', 'All products'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/sweetalert2/sweetalert2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/DataTables/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/DataTables/Buttons/css/buttons.dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h4>All products</h4>
                <ol class="breadcrumb no-bg m-b-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
            <div class="col-md-6 col-xs-12"><a href="<?php echo e(Route('add-product')); ?>" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light pull-right">Add Product</a></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="table-responsive">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if( $products->Count() > 0 ): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo e($product->code); ?></td>
                        <td><?php echo e($product->Category->title ?? '-'); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php if($product->image != ''): ?> <img src="<?php echo e(url('/uploads') . '/' . $product->image); ?>" alt="<?php echo e($product->title); ?>" style="width:50px;"/> <?php else: ?> - <?php endif; ?></td>
                        <td><?php echo e($product->status); ?></td>
                        <td>
                            <a href="<?php echo e(Route('edit-product', $product->id)); ?>" class="btn btn-success w-min-sm m-b-0-25 waves-effect waves-light">Edit</a>
                            <?php if($product->stocks->Count() > 0): ?>
                            <a href="<?php echo e(Route('product-stocks', $product->id)); ?>" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light">Stocks</a>
                            <?php else: ?>
                            <a href="<?php echo e(Route('add-product-stock', $product->id)); ?>" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light">Add stock</a>
                            <?php endif; ?>
                            <a href="<?php echo e(Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug])); ?>" target="blank" class="btn btn-purple w-min-sm m-b-0-25 waves-effect waves-light">Show on website</a>
                            <button data-title="<?php echo e($product->title); ?>" data-route="<?php echo e(Route('delete-product', $product->id)); ?>" class="btn btn-danger w-min-sm m-b-0-25 waves-effect waves-light run-swal" data-type="cancel">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="9"><div class="alert alert-warning">No products available.</div></td>
                    </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/DataTables/js/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/DataTables/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/DataTables/Responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/DataTables/Buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.run-swal').on('click', function () {
            var type = $(this).data('type');
            var $url = $(this).data('route');
            var $title = $(this).data('title');
            if (type === 'cancel') {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert " + $title + " Again!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonClass: 'btn btn-danger btn-lg m-r-1',
                    cancelButtonClass: 'btn btn-secondary btn-lg',
                    buttonsStyling: false
                }).then(function (isConfirm) {
                    if (isConfirm === true) {
                        window.location = $url;
                    }
                })
            }
        });
        $('#table-1').dataTable( {
            "pageLength": 50
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Product/index.blade.php ENDPATH**/ ?>