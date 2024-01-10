<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image blur-up lazyload" style="background-image:url(<?php echo e(asset('FrontEnd/images/collection/women-collection-bnr.jpg')); ?>);"></div>
        <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Categories</h1></div>
    </div>
</div>

<?php if($categories->Count() > 0): ?>
<div class="collection-box tle-bold section">
    <div class="container-fluid">
        <div class="section-header text-center">
            <h2 class="h2">Shop by Categories</h2>
        </div>
        <!-- Collection Box -->
        <div class="row collection-grids">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-md-4 item">
                <div class="collection-grid-item">
                    <img class="blur-up lazyload" data-src="<?php echo e($category->image != '' ? url('/uploads') . '/' . $category->image : asset('FrontEnd/images/collection/women-dress.jpg')); ?>" src="<?php echo e($category->image != '' ? url('/uploads') . '/' . $category->image : asset('FrontEnd/images/collection/women-dress.jpg')); ?>" alt="<?php echo e($category->title); ?>" title="<?php echo e($category->title); ?>" />
                    <a href="<?php echo e(Route('products', $category->slug)); ?>" class="collection-grid-item__title-wrapper">
                        <div class="title-wrapper">
                            <h3 class="collection-grid-item__title"><?php echo e($category->title); ?></h3>
                            <span class="btn btn--secondary border-btn-1">Shop Now</span>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- End Collection Box -->
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Category/categories.blade.php ENDPATH**/ ?>