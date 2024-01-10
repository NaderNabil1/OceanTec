<?php $__env->startSection('title', 'My orders'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My orders</li>
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
                    <?php if($orders->Count() > 0): ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="alt-font">
                                <tr>
                                    <th>Order#</th>
                                    <th>Qty</th>
                                    <th>Payment Method</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->qty); ?></td>
                                    <td><?php echo e($order->PaymentMethod->title); ?></td>
                                    <td><?php echo e(number_format($order->price)); ?> EGP</td>
                                    <td><?php echo e($order->status); ?></td>
                                    <td><?php echo e(date('d/m/Y - h:i A', strtotime($order->created_at))); ?></td>
                                    <td><a href="<?php echo e(Route('show-order', $order->id)); ?>" class="view">Details</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php else: ?>
                    <div class="col-12 col-sm-12 alert alert-warning">You don't have any Orders yet.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Order/index.blade.php ENDPATH**/ ?>