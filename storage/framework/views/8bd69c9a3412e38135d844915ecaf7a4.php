<?php $__env->startSection('title'); ?><?php echo e($page->title); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($banners->Count() > 0): ?>
    <div class="home-slider margin-bottom-0">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($banner->link); ?>">
            <div data-background-image="<?php echo e(url('/uploads')); ?>/<?php echo e($banner->image); ?>" class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-slider-container">
                                <div class="home-slider-desc">
                                    <div class="home-slider-title mb-4">
                                        <h2 class="mb-1 ft-bold lg-heading"><?php echo e($banner->title); ?></h2>
                                        <span class="trending"><?php echo e($banner->description); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if($homeCategories->Count() > 0): ?>
<section>
    <div class="container-fluid">
        <div class="row no-gutters exlio_gutters">
            <?php $__currentLoopData = $homeCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="single_cats">
                        <a href="<?php echo e(route('products', $homeCategory->slug)); ?>"
                            class="cards card-overflow card-scale mid_height">
                            <div class="bg-image" style="background:url(<?php echo e($homeCategory->image != '' ? url('/uploads') . '/' . $homeCategory->image : asset('FrontEnd/img/bt-1.png')); ?>)no-repeat;" data-overlay="4"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption center text-center">
                                    <h6 class="mb-1 text-light">New Collections</h6>
                                    <h3 class="m-0 ft-bold lh-1 text-light fs-md text-upper"><?php echo e($homeCategory->title); ?></h3>
                                </div>
                                <div class="ct_footer center">
                                    <span class="btn btn-white stretched-link fs-md">Shop Now <i class="ti-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- ======================= Products Lists ======================== -->
<section class="space min pt-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h3 class="ft-bold pt-3">New Abaya Collection</h3>
                </div>
            </div>
        </div>

        <div class="row rows-products">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <?php echo $__env->make('FrontEnd.Product.widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<!-- ======================= Products List ======================== -->

<?php if($testimonials->Count() > 0): ?>
<section class="gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Testimonials</h2>
                    <h3 class="ft-bold pt-3">Client Reviews</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                <div class="reviews-slide px-3">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single_review">
                        <div class="sng_rev_thumb">
                            <figure><img
                                    src="<?php if($testimonial->image == null): ?> <?php echo e(asset('FrontEnd/img/team-1.jpg')); ?> <?php else: ?> <?php echo e(url('/uploads')); ?>/<?php echo e($testimonial->image); ?> <?php endif; ?>"
                                    class="img-fluid circle" alt="<?php echo e($testimonial->name); ?>" /></figure>
                        </div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <span class="fs-md"><?php echo $testimonial->description; ?></span>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0"><?php echo e($testimonial->name); ?></h4>
                                <span class="fs-sm"><?php echo e($testimonial->position); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if($on_sale_products->Count() > 0): ?>
<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h3 class="ft-bold pt-3">On Sale Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="slide_items">
                    <?php $__currentLoopData = $on_sale_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on_sale_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $product = $on_sale_product; ?>
                        <div class="single_itesm">
                            <?php echo $__env->make('FrontEnd.Product.widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- ======================= Instagram Start ============================ -->
<!--<section class="p-0">
    <div class="container-fluid p-0">

        <div class="row no-gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Instagram Gallery</h2>
                    <span class="fs-lg ft-bold theme-cl pt-3">@laplain</span>
                    <h3 class="ft-bold lh-1">From Instagram</h3>
                </div>
            </div>
        </div>

        <div class="row no-gutters">

            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="<?php echo e(asset('FrontEnd/img/i-1.png')); ?>" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Page/index.blade.php ENDPATH**/ ?>