<?php $__env->startSection('title', 'Thank you'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thank you</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Product Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                <!-- Icon -->
                <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-success text-success mx-auto mb-4"><i class="lni lni-heart-filled fs-lg"></i></div>
                <!-- Heading -->
                <h2 class="mb-2 ft-bold">Your Order is Completed!</h2>
                <!-- Text -->
                <p class="ft-regular fs-md mb-5">Your order <span class="text-body text-dark">#<?php echo e($order->id); ?></span> has been completed. Your order details are shown for your personal accont.</p>
                <!-- Button -->
                <a class="btn btn-dark" href="<?php echo e(route('home')); ?>">Back To Home</a>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Cart/thanks.blade.php ENDPATH**/ ?>