
<?php $__env->startSection('title'); ?><?php echo e($category->title); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($products->Count() > 0): ?>
<div class="shell">
  <div class="container">
        <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3"><a href="<?php echo e(Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug])); ?>" >
                <div class="wsk-cp-product" >
                    <div class="wsk-cp-img"> 
                        <?php if($product->image != ''): ?>
                        <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->title); ?>" class="img-responsive" />
                        <?php else: ?>
                        <img src="<?php echo e(asset('FrontEnd/img/nophoto.jpg')); ?>" alt="<?php echo e($product->title); ?>" class="img-responsive" />
                        <?php endif; ?>
                    </div>
                    <div class="wsk-cp-text">
                        <div class="title-product">
                        <a href="<?php echo e(Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug])); ?>"><?php echo e($product->title); ?></a></3>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price"><?php echo e($product->price); ?></span></div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php else: ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="alert alert-warning">There is no available Products now!</div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\OceanTec\resources\views/FrontEnd/Category/products.blade.php ENDPATH**/ ?>