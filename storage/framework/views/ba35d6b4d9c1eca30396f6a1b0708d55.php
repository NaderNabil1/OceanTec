<?php $__env->startSection('title'); ?><?php echo e($category->title); ?> Products <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-3 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($category->title); ?> Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ============================= Filter Wrap ============================== -->


<!-- ======================= All Product List ======================== -->
<section class="middle">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 p-xl-0">
                <div class="search-sidebar sm-sidebar border">
                    <div class="search-sidebar-body">

                        <!-- Single Option -->
                        <div class="single_search_boxed">
                            <div class="widget-boxed-header px-3">
                                <h4 class="mt-3">Categories</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="side-list no-border">
                                    <div class="filter-card" id="shop-categories">

                                        <!-- Single Filter Card -->
                                        <div class="single_filter_card">
                                            <div class="card-body">
                                                <div class="inner_widget_link">
                                                    <ul>
                                                        <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e($menuCategory->subs->Count() > 0 ? '#!' : Route('products', $menuCategory->slug)); ?>"><?php echo e($menuCategory->title); ?></a>
                                                            <?php if($menuCategory->subs->Count() > 0): ?>
                                                            <ol>
                                                                <?php $__currentLoopData = $menuCategory->subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory->sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="<?php echo e(Route('products', $menuCategory->sub->slug)); ?>" class="site-nav"><?php echo e($menuCategory->sub->title); ?></a></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ol>
                                                            <?php endif; ?>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Option -->
<!--                        <div class="single_search_boxed">
                            <div class="widget-boxed-header">
                                <h4><a href="#pricing" data-toggle="collapse" aria-expanded="false" role="button">Pricing</a></h4>
                            </div>
                            <div class="widget-boxed-body collapse show" id="pricing" data-parent="#pricing">
                                <div class="side-list no-border mb-4">
                                    <div class="rg-slider">
                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                    </div>		
                                </div>
                            </div>
                        </div>-->

                        <!-- Single Option -->
<!--                        <div class="single_search_boxed">
                            <div class="widget-boxed-header">
                                <h4><a href="#size" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Size</a></h4>
                            </div>
                            <div class="widget-boxed-body collapse" id="size" data-parent="#size">
                                <div class="side-list no-border">
                                     Single Filter Card 
                                    <div class="single_filter_card">
                                        <div class="card-body pt-0">
                                            <div class="text-left pb-0 pt-2">
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="26s">
                                                    <label class="form-option-label" for="26s">26</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="28s">
                                                    <label class="form-option-label" for="28s">28</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="30s" checked>
                                                    <label class="form-option-label" for="30s">30</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="32s">
                                                    <label class="form-option-label" for="32s">32</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="34s">
                                                    <label class="form-option-label" for="34s">34</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="36s">
                                                    <label class="form-option-label" for="36s">36</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="38s">
                                                    <label class="form-option-label" for="38s">38</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="40s">
                                                    <label class="form-option-label" for="40s">40</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="42s">
                                                    <label class="form-option-label" for="42s">42</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">

<!--                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="border mb-3 mfliud">
                            <div class="row align-items-center py-2 m-0">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0"><?php echo e($products->Count()); ?> Items Found</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps d-flex align-items-center justify-content-end m-start">
                                        <div class="single_fitres mr-2 br-right">
                                            <select class="custom-select simple">
                                                <option value="1" selected="">Default Sorting</option>
                                                <option value="2">Sort by price: Low price</option>
                                                <option value="3">Sort by price: Hight price</option>
                                                <option value="4">Sort by rating</option>
                                                <option value="5">Sort by trending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <!-- row -->
                <div class="row align-items-center rows-products">
                    <?php if($products->Count() > 0): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <?php echo $__env->make('FrontEnd.Product.widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="alert alert-warning">There is no available Products now!</div>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                        <?php echo $products->links(); ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Product/products.blade.php ENDPATH**/ ?>