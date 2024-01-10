<?php $__env->startSection('title', 'Shipping addresses'); ?>

<?php $__env->startSection('content'); ?>

<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('my-account')); ?>">My account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Shipping addresses
                        </li>
                    </ol>
                </div>
            </nav>

            <h1>Shipping addresses</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Shipping addresses</h2>
                        </div>

                        <form action="<?php echo e(Route('add-address')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="payment-methods">
                                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio">
                                            <a href="<?php echo e(Route('edit-address', $address->id)); ?>"><label class="custom-control-label"><?php echo e($address->title); ?></label></a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="form-footer mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                    Add new address
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/ShippingAddress/addresses.blade.php ENDPATH**/ ?>