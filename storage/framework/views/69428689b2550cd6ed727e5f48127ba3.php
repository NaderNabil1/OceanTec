<?php if(Auth::user()): ?>
<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
    <div class="cart_single d-flex align-items-center">
        <div class="cart_selected_single_thumb">
            <a href="<?php echo e(Route('product-details', ['slug' => $authCartItem->Product->Category->slug, 'prodSlug' => $authCartItem->Product->slug])); ?>">
                <img src="<?php if($authCartItem->Product->image != NULL): ?> <?php echo e(url('/uploads')); ?>/<?php echo e($authCartItem->Product->image); ?> <?php else: ?> <?php echo e(asset('FrontEnd/img/product/4.jpg')); ?> <?php endif; ?>" width="60" class="img-fluid" alt="<?php echo e($authCartItem->Product->title); ?>" />
            </a>
        </div>
        <div class="cart_single_caption pl-2">
            <h4 class="product_title fs-sm ft-medium mb-0 lh-1"><?php echo e($authCartItem->Product->title); ?></h4>
            <p class="mb-2"><span class="text-dark ft-medium small"><?php echo e($authCartItem->qty); ?> Items, <?php echo e($authCartItem->Size->title); ?></span> <?php if($authCartItem->Product->color != ''): ?>, <span class="text-dark small"><?php echo e($authCartItem->Product->Color->title); ?></span></p><?php endif; ?>
            <h4 class="fs-md ft-medium mb-0 lh-1"><?php if($authCartItem->Product->sale_price != NULL && $authCartItem->Product->sale_end_date > now()): ?> <?php echo e(number_format($authCartItem->Product->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($authCartItem->Product->price)); ?> AED <?php endif; ?></h4>
        </div>
    </div>
    <div class="fls_last"><a href='<?php echo e(Route('remove-item', $authCartItem->id)); ?>' class="close_slide gray"><i class="ti-close"></i></a></div>
</div>
<?php else: ?>
<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
    <div class="cart_single d-flex align-items-center">
        <div class="cart_selected_single_thumb">
            <a href="<?php echo e(Route('product-details', ['slug' => $authCartItem['product']->Category->slug, 'prodSlug' => $authCartItem['product']->slug])); ?>">
                <img src="<?php if($authCartItem['product']->image != NULL): ?> <?php echo e(url('/uploads')); ?>/<?php echo e($authCartItem['product']->image); ?> <?php else: ?> <?php echo e(asset('FrontEnd/img/product/4.jpg')); ?> <?php endif; ?>" width="60" class="img-fluid" alt="<?php echo e($authCartItem['product']->title); ?>" />
            </a>
        </div>
        <div class="cart_single_caption pl-2">
            <h4 class="product_title fs-sm ft-medium mb-0 lh-1"><?php echo e($authCartItem['product']->title); ?></h4>
            <p class="mb-2"><span class="text-dark ft-medium small"><?php echo e($authCartItem['qty']); ?> Items, <?php echo e($authCartItem['size']->title); ?></span> <?php if($authCartItem['product']->color != ''): ?>, <span class="text-dark small"><?php echo e($authCartItem['product']->Color->title); ?></span></p><?php endif; ?>
            <h4 class="fs-md ft-medium mb-0 lh-1"><?php if($authCartItem['product']->sale_price != NULL && $authCartItem['product']->sale_end_date > now()): ?> <?php echo e(number_format($authCartItem['product']->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($authCartItem['product']->price)); ?> AED <?php endif; ?></h4>
        </div>
    </div>
    <div class="fls_last"><a href='<?php echo e(Route('session-remove-item', ['id' => $authCartItem['productId'], 'size' => $authCartItem['size']])); ?>' class="close_slide gray"><i class="ti-close"></i></a></div>
</div>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Cart/cartWidget.blade.php ENDPATH**/ ?>