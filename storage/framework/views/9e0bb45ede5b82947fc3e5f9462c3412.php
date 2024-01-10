<?php $__env->startSection('title'); ?><?php echo e($product->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('products', $product->Category->slug)); ?>"><?php echo e($product->Category->title); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo e($product->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">
        <div class="row">
            <?php if(session()->has('message')): ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            </div>
            <?php endif; ?>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php if($gallery->Count() > 0): ?>
                <div class="sp-loading">LOADING IMAGES</div>
                <div class="sp-wrap">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('/uploads')); ?>/<?php echo e($item->path); ?>"><img src="<?php echo e(url('/uploads')); ?>/<?php echo e($item->path); ?>" alt="<?php echo e($product->title); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prd_details">

                    <div class="prt_01 mb-2"><span class="text-success bg-light-success rounded px-2 py-1"><?php echo e($product->Category->title); ?></span></div>
                    <div class="prt_02 mb-3">
                        <h2 class="ft-bold mb-1"><?php echo e($product->title); ?></h2>
                        <div class="text-left">
                            <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                <?php for( $i = 0; $i < $product->rate; $i++ ): ?>
                                <i class="fas fa-star filled"></i>
                                <?php endfor; ?>
                                
                                <?php for( $i = 0; $i < 5 - $product->rate; $i++ ): ?>
                                <i class="fas fa-star"></i>
                                <?php endfor; ?>
                                <span class="small">(<?php echo e($reviews->Count()); ?> Reviews)</span>
                            </div>
                            <div class="elis_rty">
                                <?php if($product->sale_price != NULL && $product->sale_end_date > now()): ?>
                                <span class="ft-medium text-muted line-through fs-md mr-2"><?php echo e(number_format($product->price)); ?> AED</span>
                                <span class="ft-bold theme-cl fs-lg mr-2"><?php echo e(number_format($product->sale_price)); ?> AED</span>
                                <?php else: ?>
                                <span class="ft-bold fs-lg mr-2 text-dark"><?php echo e(number_format($product->price)); ?> AED</span>
                                <?php endif; ?>
                                <?php if($stock->Count() > 0): ?>
                                <span class="ft-regular text-light bg-success py-1 px-2 fs-sm">In Stock</span>
                                <?php else: ?>
                                <span class="ft-regular text-light bg-danger py-1 px-2 fs-sm">Out of Stock</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="prt_03 mb-4">
                        <?php echo $product->description; ?>

                    </div>

                    <div class="prt_04 mb-4">
                        <?php if($product->color != ''): ?><p class="d-flex align-items-center mb-1">Color:<strong class="fs-sm text-dark ft-medium ml-1"><?php echo e($product->Color->title); ?></strong></p><?php endif; ?>
                        <p class="d-flex align-items-center mb-1">Category:<a href="<?php echo e(route('products', $product->Category->slug)); ?>" title="<?php echo e($product->Category->title); ?>"><strong class="fs-sm text-dark ft-medium ml-1"><?php echo e($product->Category->title); ?></strong></a></p>
                        <?php if($product->code != ''): ?><p class="d-flex align-items-center mb-0">Code:<strong class="fs-sm text-dark ft-medium ml-1"><?php echo e($product->code); ?></strong></p><?php endif; ?>
                    </div>
                    <?php if($available_sizes->Count() > 0): ?>
                    <form class="addtocart col-md-12" method="post" action="<?php echo e(Route('add-to-cart')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="prt_04 mb-4">
                            <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                            <div class="text-left pb-0 pt-2">
                                <?php $__currentLoopData = $available_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check size-option form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size-option" id="swatch-1-<?php echo e($size->Size->symbol); ?>" value="<?php echo e($size->Size->id); ?>" data-stock='<?php echo e($size->stock); ?>'>
                                    <label class="form-option-label swatchLbl" for="swatch-1-<?php echo e($size->Size->symbol); ?>"><?php echo e($size->Size->title); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="alert alert-danger d-none" id="sizeAlert">Please Select Size before adding to Cart</div>
                        </div>

                        <div class="prt_05 mb-4">
                            <div class="form-row mb-7">
                                <div class="col-12 col-lg-auto">
                                    <input type="number" name="qty" value="1" class="mb-2 custom-select qty" />
                                </div>
                                <input type="hidden" name="product" value="<?php echo e($product->id); ?>" class="product-form__input qty" />
                                <input type="hidden" name="size" id='orderSize' value="" class="product-form__input" required="" />
                                <div class="col-12 col-lg">
                                    <button type="submit" class="btn btn-block custom-height bg-dark mb-2"><i class="lni lni-shopping-basket mr-2"></i> Add to Cart </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                    <div class="prt_06">
                        <p class="mb-0 d-flex align-items-center">
                            <span class="mr-4">Share:</span>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                <i class="fab fa-twitter position-absolute"></i>
                            </a>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                <i class="fab fa-facebook-f position-absolute"></i>
                            </a>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
                                <i class="fab fa-pinterest-p position-absolute"></i>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Product Detail End ======================== -->

<!-- ======================= Product Description ======================= -->
<section class="middle">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
                <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews_info">
                            <div class="single_rev d-flex align-items-start br-bottom py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-1.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Daniel Rajdesh</h5>
                                        <span class="small">30 jul 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Review -->
                            <div class="single_rev d-flex align-items-start br-bottom py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Seema Gupta</h5>
                                        <span class="small">30 Aug 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="reviews_rate">
                            <form class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h4>Submit Rating</h4>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="revie_stars d-flex align-items-center justify-content-between px-2 py-2 gray rounded mb-2 mt-1">
                                        <div class="srt_013">
                                            <div class="submit-rating">
                                                <input id="star-5" type="radio" name="rating" value="star-5" />
                                                <label for="star-5" title="5 stars">
                                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-4" type="radio" name="rating" value="star-4" />
                                                <label for="star-4" title="4 stars">
                                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-3" type="radio" name="rating" value="star-3" />
                                                <label for="star-3" title="3 stars">
                                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-2" type="radio" name="rating" value="star-2" />
                                                <label for="star-2" title="2 stars">
                                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-1" type="radio" name="rating" value="star-1" />
                                                <label for="star-1" title="1 star">
                                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="srt_014">
                                            <h6 class="mb-0">4 Star</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Full Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Email Address</label>
                                        <input type="email" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Description</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group m-0">
                                        <a class="btn btn-white stretched-link hover-black">Submit Review <i class="lni lni-arrow-right"></i></a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Product Description End ==================== -->

<?php if($relatedProducts->Count() > 0): ?>
<!-- ======================= Similar Products Start ============================ -->
<section class="middle pt-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Similar Products</h2>
                    <h3 class="ft-bold pt-3">Matching Producta</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="slide_items">
                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $product = $relatedProduct; ?>
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
<!-- ======================= Similar Products Start ============================ -->

<!-- ======================= Customer Features ======================== -->
<section class="px-0 py-3 br-top">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Free Shipping</h5>
                        <span class="text-muted">Capped at $10 per order</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Secure Payments</h5>
                        <span class="text-muted">Up to 6 months installments</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">15-Days Returns</h5>
                        <span class="text-muted">Shop with fully confidence</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">24x7 Fully Support</h5>
                        <span class="text-muted">Get friendly support</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script>
    $(document).ready(function(){
        $('form.addtocart').submit(function(e){
            if (!$("input[name='size-option']:checked").val()) {
                $('#sizeAlert').removeClass('d-none');
                e.preventDefault();
            }
        });
        
        $('.swatchLbl').click(function(){
            var $size = $(this).prev().val();
            var $stock = $(this).prev().data('stock');
            $('.sizename').text($(this).text());
            $('#orderSize').val($size);
            $('#orderSizeSticky').val($size);
            $('#stickyOptionSize').text($(this).text());
            $('.qty').attr('max', $stock);
            $('#sizeAlert').addClass('d-none');
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Product/show.blade.php ENDPATH**/ ?>