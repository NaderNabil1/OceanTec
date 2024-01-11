
<?php $__env->startSection('title', __('Categories')); ?>

<?php $__env->startSection('content'); ?>

<!--Page Banner Start-->
    <div class="section page-banner-wrapper bg-cover" style="background-image: url(FrontEnd/images/page-banner.jpg);">
        <div class="container">
            <div class="page-banner">
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Categories')); ?></li>
                </ul>
            </div>
        </div>
    </div>
<!--Page Banner Start-->

<!--Banner Start-->
   <?php if($categories->Count() > 0): ?>
    <div class="section section-padding mt-10">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <!-- Single banner Start -->
                    <div class="single-banner mt-6">
                        <a href="<?php echo e(route('products', $category->slug)); ?>">
                            <img src="<?php echo e($category->image != '' ? url('/uploads') . '/' . $category->image : asset('FrontEnd/images/banner-02.jpg')); ?>">
                            <div class="text-center">
                                <h2><?php echo e($category->title); ?></h2>
                            </div>
                        </a>
                    </div>
                    <!-- Single banner End -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--Banner End-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\OceanTec\resources\views/FrontEnd/Category/categories.blade.php ENDPATH**/ ?>