<?php $__env->startSection('title', 'Order details'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"<a href="<?php echo e(route('orders')); ?>">My orders</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order #<?php echo e($order->id); ?></li>
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
                <div class="ord_list_wrap border mb-4 mfliud">
                    <div class="ord_list_head gray d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="olh_flex">
                            <p class="m-0 p-0"><span class="text-muted">Order Number</span></p>
                            <h6 class="mb-0 ft-medium">#<?php echo e($order->id); ?></h6>
                        </div>	
                    </div>
                    <div class="ord_list_body text-left">
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row align-items-center justify-content-center m-0 py-4 br-bottom">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="cart_single d-flex align-items-start mfliud-bot">
                                    <div class="cart_selected_single_thumb">
                                        <a href="#"><img src="assets/img/product/4.jpg" width="75" class="img-fluid rounded" alt="<?php echo e($item->Product->title); ?>"></a>
                                    </div>
                                    <div class="cart_single_caption pl-3">
                                        <p class="mb-0"><span class="text-muted small"><?php echo e($item->Product->Category->title); ?></span></p>
                                        <h4 class="product_title fs-sm ft-medium mb-1 lh-1"><?php echo e($item->Product->title); ?></h4>
                                        <p class="mb-2"><span class="text-dark medium">Size: <?php echo e($item->size != '' ? $item->Size->title : ''); ?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <p class="mb-1 p-0"><span class="text-muted">Price</span></p>
                                <div class="delv_status"><?php echo e(number_format($item->price)); ?> AED</div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <p class="mb-1 p-0"><span class="text-muted">Qty</span></p>
                                <div class="delv_status"><?php echo e($item->qty); ?></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <p class="mb-1 p-0"><span class="text-muted">Total</span></p>
                                <h6 class="mb-0 ft-medium fs-sm"><?php echo e(number_format($item->price * $item->qty)); ?> AED</h6>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                    </div>
                    <div class="ord_list_footer d-flex align-items-center justify-content-between br-top px-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 pr-0 py-2 olf_flex d-flex align-items-center justify-content-between">
                            <div class="olf_inner_right"><h5 class="mb-0 fs-sm ft-bold">Total: <?php echo e(number_format($order->price)); ?> AED</h5></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Order/show.blade.php ENDPATH**/ ?>