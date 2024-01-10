<?php $__env->startSection('title', 'My Addresses'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Addresses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <?php echo $__env->make('FrontEnd.Account.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <!-- row -->
                <div class="row align-items-start">
                    <?php if($addresses->Count() > 0): ?>
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card-wrap border rounded mb-4">
                            <div class="card-wrap-header px-3 py-2 br-bottom d-flex align-items-center justify-content-between">
                                <div class="card-header-flex">
                                    <h4 class="fs-md ft-bold mb-1"><?php echo e($address->title); ?></h4>
                                </div>
                                <div class="card-head-last-flex">
                                    <!-- Button -->
                                    <a class="border p-3 circle text-dark d-inline-flex align-items-center justify-content-center" href="<?php echo e(route('edit-address', $address->id)); ?>"><i class="fas fa-pen-nib position-absolute"></i></a>
                                    <!-- Button -->
                                    <a href="<?php echo e(route('delete-address', $address->id)); ?>" class="border bg-white text-danger p-3 circle text-dark d-inline-flex align-items-center justify-content-center"><i class="fas fa-times position-absolute"></i></a>
                                </div>
                            </div>
                            <div class="card-wrap-body px-3 py-3">
                                <h5 class="ft-medium mb-1"><?php echo e($address->User->first_name . ' ' . $address->User->last_name); ?></h5>
                                <p><?php echo e($address->address); ?></p>
                                <p class="lh-1"><span class="text-dark ft-medium">Email:</span> <?php echo e($address->email); ?></p>
                                <p><span class="text-dark ft-medium">Call:</span> <?php echo e($address->phone); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="col-12 col-sm-12 alert alert-warning">You don't have any Address yet.</div>
                    <?php endif; ?>
                </div>

                <!-- row -->
                <div class="row align-items-start">

                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <a href="<?php echo e(route('add-address')); ?>" class="btn stretched-link borders full-width"><i class="fas fa-plus mr-2"></i>Add New Address</a>
                        </div>
                    </div>

                </div>
                <!-- row -->

            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\laplain.ae\resources\views/FrontEnd/ShippingAddress/addresses.blade.php ENDPATH**/ ?>