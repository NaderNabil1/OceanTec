
<?php $__env->startSection('title'); ?><?php echo e($product->title); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- ----start new img  -->
                <div class="shop-single-image">
                        <div class="gallery-top">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                        <?php if($product->image != ''): ?>
                                        <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->title); ?>" class="img-responsive" />
                                        <?php else: ?>
                                        <img src="<?php echo e(asset('FrontEnd/img/nophoto.jpg')); ?>" alt="<?php echo e($product->title); ?>" class="img-responsive" />
                                        <?php endif; ?>
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="<?php echo e(url('/uploads')); ?>/<?php echo e($product->image); ?>">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ----end new img  -->
            </div>

            <div class="col-lg-6">
                <!-- Shop Single Content Start -->
                <div class="shop-single-content">
                    </br>
                    <h3 class="product-name" style="font-size:50px;"><?php echo e($product->title); ?></h3>
                    <div class="product-prices">
                        <span class="sale-price"style="font-size:30px;"><?php echo e(number_format($product->price)); ?> <?php echo e(__('EGP')); ?></span>
                    </div>
                    <div class="product-description">
                        <ul>
                            <li style="font-size:30px;"><?php echo $product->description; ?></li>
                        </ul>
                    </div>
                </div>
                <!-- Shop Single Content End -->
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\OceanTec\resources\views/FrontEnd/Product/show.blade.php ENDPATH**/ ?>