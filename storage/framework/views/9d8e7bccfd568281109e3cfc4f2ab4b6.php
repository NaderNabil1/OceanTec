<?php $__env->startSection('title', 'Cart'); ?>
<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center d-block mb-5">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
        <?php if($alert != 0): ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
            <div class="alert alert-danger">There is some products in you cart out of stock, Please Update your Cart Quantities to Place your Order.</div>
        </div>
        <?php endif; ?>
        <?php if(Auth::User() && $authCartItems->Count() > 0 || $authCartItems != ''): ?>
        <form action="<?php echo e(Route('update-cart')); ?>" method="post" class="cart style2">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 col-md-12">
                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
                        <?php $__currentLoopData = $authCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Auth::User()): ?>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <a href="<?php echo e(Route('product-details', ['slug' => $cart_item->Product->Category->slug, 'prodSlug' => $cart_item->Product->slug])); ?>">
                                        <?php if($cart_item->Product->image != NULL): ?>
                                        <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($cart_item->Product->image); ?>" alt="<?php echo e($cart_item->Product->title); ?>" class="img-fluid">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center justify-content-between">
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-md ft-medium mb-1 lh-1"><?php echo e($cart_item->Product->title); ?></h4>
                                        <?php if($cart_item->size != ''): ?><p class="mb-1 lh-1"><span class="text-dark">Size: <?php echo e($cart_item->Size->title); ?></span></p><?php endif; ?>
                                        <?php if($cart_item->Product->palette != ''): ?><p class="mb-3 lh-1"><span class="text-dark">Color: <?php echo e($cart_item->Product->Palette->title); ?></span></p><?php endif; ?>
                                        <h4 class="fs-md ft-medium mb-3 lh-1"><?php if($cart_item->Product->sale_price != NULL && $cart_item->Product->sale_end_date > now()): ?> <?php echo e(number_format($cart_item->Product->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($cart_item->Product->price)); ?> AED <?php endif; ?></h4>
                                        <input tyle="number" class="mb-2 custom-select w-auto itemQty" value="<?php echo e($cart_item->qty); ?>">
                                    </div>
                                    <div class="fls_last"><a href="<?php echo e(Route('remove-item', $cart_item->id)); ?>" class="close_slide gray"><i class="ti-close"></i></a></div>
                                    <?php if($cart_item->alert != ''): ?><div class="alert alert-danger">No Stock Available - Available Stock <?php echo e($cart_item->stock); ?></div><?php endif; ?>
                                </div>
                            </div>
                        </li>
                        <?php else: ?>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <a href="<?php echo e(Route('product-details', ['slug' => $cart_item['product']->Category->slug, 'prodSlug' => $cart_item['product']->slug])); ?>">
                                        <?php if($cart_item['product']->image != NULL): ?>
                                        <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($cart_item['product']->image); ?>" alt="<?php echo e($cart_item['product']->title); ?>" class="img-fluid">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center justify-content-between">
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-md ft-medium mb-1 lh-1"><?php echo e($cart_item['product']->title); ?></h4>
                                        <?php if($cart_item['size'] != ''): ?><p class="mb-1 lh-1"><span class="text-dark">Size: <?php echo e($cart_item['size']->title); ?></span></p><?php endif; ?>
                                        <?php if($cart_item['product']->palette != ''): ?><p class="mb-3 lh-1"><span class="text-dark">Color: <?php echo e($cart_item['product']->Palette->title); ?></span></p><?php endif; ?>
                                        <h4 class="fs-md ft-medium mb-3 lh-1"><?php if($cart_item['product']->sale_price != NULL && $cart_item['product']->sale_end_date > now()): ?> <?php echo e(number_format($cart_item['product']->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($cart_item['product']->price)); ?> AED <?php endif; ?></h4>
                                        <input tyle="number" class="mb-2 custom-select w-auto itemQty" value="<?php echo e($cart_item['qty']); ?>">
                                    </div>
                                    <div class="fls_last"><a href="<?php echo e(Route('session-remove-item', ['id' => $cart_item['productId'], 'size' => $cart_item['size']])); ?>" class="close_slide gray"><i class="ti-close"></i></a></div>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

    <!--                <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                        <div class="col-12 col-md-7">
                             Coupon 
                            <form class="mb-7 mb-md-0">
                                <label class="fs-sm ft-medium text-dark">Coupon code:</label>
                                <div class="row form-row">
                                    <div class="col">
                                        <input class="form-control" type="text" placeholder="Enter coupon code*">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-dark" type="submit">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-auto mfliud">
                            <button class="btn stretched-link borders">Update Cart</button>
                        </div>
                    </div>-->
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card mb-4 gray mfliud">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Subtotal</span> <span class="ml-auto text-dark ft-medium"><?php echo e(number_format($orderTotal)); ?> AED</span>
                                </li>
                                <li class="list-group-item fs-sm text-center">
                                    Shipping cost calculated at Checkout *
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php if($alert == 0): ?>
                    <a class="btn btn-block btn-dark mb-3" href="<?php echo e(Route('checkout')); ?>">Proceed to Checkout</a>
                    <?php endif; ?>
                    <a class="btn-link text-dark ft-medium" href="<?php echo e(Route('home')); ?>"><i class="ti-back-left mr-2"></i> Continue Shopping</a>
                </div>

            </div>
        </form>
        <?php else: ?>
        <div class="alert alert-warning">Your Cart is Empty!</div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Cart/cart.blade.php ENDPATH**/ ?>