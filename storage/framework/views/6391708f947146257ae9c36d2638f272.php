<?php $__env->startSection('title'); ?>Story <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <?php if($page->description != ''): ?><div class="abt_caption"><?php echo $page->description; ?></div><?php endif; ?>
                <?php if($mission->value != ''): ?>
                <div class="row mt-4">
                    <div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                        <h3><b>Our Mission</b></h3>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                        <p><?php echo e($mission->value); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($vision->value != ''): ?>
                <div class="row mt-4">
                    <div class="col-4 col-sm-3 col-md-3 col-lg-3 text-center">
                        <h3><b>Our Vision</b></h3>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                        <p><?php echo e($vision->value); ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="abt_caption">
                    <?php if($page->image != ''): ?>
                    <img src="<?php echo e(url('/uploads') . '/' . $page->image); ?>" class="img-fluid rounded" alt="<?php echo e($page->title); ?>" />
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Page/about.blade.php ENDPATH**/ ?>