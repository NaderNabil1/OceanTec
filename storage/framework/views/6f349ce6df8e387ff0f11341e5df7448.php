<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Innovation Scope" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?> | La Plain</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" type="image/png" href="<?php echo e(asset('FrontEnd/img/favicon.png')); ?>">
        <link href="<?php echo e(asset('FrontEnd/css/styles.css')); ?>?v=0.0001" rel="stylesheet">
        <?php echo $__env->yieldContent('stylesheets'); ?>
    </head>

    <body>
        <div class="preloader"></div>
        <div id="main-wrapper">
            <div class="header header-light dark-text">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('FrontEnd/img/logo.png')); ?>" class="logo" alt="La Plain" />
                            </a>
                            <div class="nav-toggle"></div>
                            <div class="mobile_nav">
                                <ul>
                                    <!--<li><a href="#" onclick="openSearch()"><i class="lni lni-search-alt"></i></a></li>-->
                                    <li><a href="#" data-toggle="modal" data-target="#login"><i class="lni lni-user"></i></a></li>
                                    <li><a href="#" onclick="openCart()"><i class="lni lni-shopping-basket"></i><span class="dn-counter"><?php if(Auth::user()): ?> <?php echo e($authCartItems->Count()); ?> <?php else: ?> <?php if($authCartItems != NULL): ?> <?php echo e(count($authCartItems)); ?> <?php else: ?> 0 <?php endif; ?> <?php endif; ?></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li <?php if(Route::current()->getName() == 'home'): ?> active <?php endif; ?>><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                                <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($menuCategory->subs->Count() > 0 ? '#!' : Route('products', $menuCategory->slug)); ?>"><?php echo e($menuCategory->title); ?></a>
                                    <?php if($menuCategory->subs->Count() > 0): ?>
                                    <ul class="nav-dropdown nav-submenu">
                                        <?php $__currentLoopData = $menuCategory->subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory->sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(Route('products', $menuCategory->sub->slug)); ?>" class="site-nav"><?php echo e($menuCategory->sub->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <?php if(Auth::User() && Auth::User()->role == 'Admin' || Auth::User() && Auth::User()->role == 'Super admin'): ?>
                                <li><a href="<?php echo e(route('dashboard')); ?>" target="_blank">Admin Area</a></li>
                                <?php endif; ?>
                                <!--<li><a href="#" onclick="openSearch()"><i class="lni lni-search-alt"></i></a></li>-->
                                <?php if(Auth::user()): ?>
                                <li><a href="<?php echo e(Route('edit-account')); ?>"><i class="lni lni-user"></i></a></li>
                                <?php else: ?>
                                <li><a href="<?php echo e(route('login')); ?>" data-target="#login"><i class="lni lni-user"></i></a></li>
                                <?php endif; ?>
                                <li><a href="#" onclick="openCart()"><i class="lni lni-shopping-basket"></i><span class="dn-counter"><?php if(Auth::user()): ?> <?php echo e($authCartItems->Count()); ?> <?php else: ?> <?php if($authCartItems != NULL): ?> <?php echo e(count($authCartItems)); ?> <?php else: ?> 0 <?php endif; ?> <?php endif; ?></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="light-footer">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="footer_widget">
                                    <img src="<?php echo e(asset('FrontEnd/img/logo.png')); ?>" class="img-footer small mb-2" alt="La Plain" />
                                    <?php if($address->value != ''): ?><div class="address mt-3"><?php echo e($address->value); ?> </div><?php endif; ?>
                                    <?php if($phone->value != ''): ?><div class="address mt-3"><?php echo e($phone->value); ?> </div><?php endif; ?>
                                    <div class="address mt-3">
                                        <ul class="list-inline">
                                            <?php if($facebook->value != ''): ?><li class="list-inline-item"><a href="<?php echo e($facebook->value); ?>" target="_blank"><i class="lni lni-facebook-filled"></i></a></li><?php endif; ?>
                                            <?php if($youtube->value != ''): ?><li class="list-inline-item"><a href="<?php echo e($youtube->value); ?>" target="_blank"><i class="lni lni-youtube"></i></a></li><?php endif; ?>
                                            <?php if($instagram->value != ''): ?><li class="list-inline-item"><a href="<?php echo e($instagram->value); ?>" target="_blank"><i class="lni lni-instagram-filled"></i></a></li><?php endif; ?>
                                            <?php if($tiktok->value != ''): ?><li class="list-inline-item"><a href="<?php echo e($tiktok->value); ?>" target="_blank"><i class="lni lni-tiktok-original"></i></a></li><?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Supports</h4>
                                    <ul class="footer-menu">
                                        <li><a href="<?php echo e(Route('contact')); ?>">Contact</a></li>
                                        <li><a href="<?php echo e(Route('about')); ?>">About</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Shop</h4>
                                    <ul class="footer-menu">
                                        <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($menuCategory->subs->Count() == 0): ?>
                                        <li><a href="<?php echo e($menuCategory->subs->Count() > 0 ? '#!' : Route('products', $menuCategory->slug)); ?>"><?php echo e($menuCategory->title); ?></a></li>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">User Area</h4>
                                    <ul class="footer-menu">
                                        <?php if(auth()->guard()->guest()): ?>
                                        <li><a href="<?php echo e(Route('login')); ?>">Login</a></li>
                                        <li><a href="<?php echo e(Route('register')); ?>">Register</a></li>
                                        <?php else: ?>
                                        <li><a href="<?php echo e(Route('edit-account')); ?>">My Account</a></li>
                                        <li><a href="<?php echo e(Route('orders')); ?>">My Orders</a></li>
                                        <?php endif; ?>
                                        <li><a href="<?php echo e(Route('cart')); ?>">Cart</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Subscribe</h4>
                                    <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                                    <div class="foot-news-last">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <div class="input-group-append">
                                                <button type="button" class="input-group-text bg-dark b-0 text-light"><i class="lni lni-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="address mt-3">
                                        <h5 class="fs-sm">Secure Payments</h5>
                                        <div class="scr_payment"><img src="<?php echo e(asset('FrontEnd/img/card.png')); ?>" class="img-fluid" alt="Secure Payments" /></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 text-center">
                                <p class="mb-0">© <?php echo e(date('Y')); ?> La Plain. <a href="https://innovationscope.com" target="_blank">Developed By <span>Innovation Scope</span></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ============================ Footer End ================================== -->
            <!-- Search -->
            <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;"
                id="Search">
                <div class="rightMenu-scroll">
                    <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                        <h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
                        <button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
                    </div>

                    <div class="cart_action px-3 py-4">
                        <form class="form m-0 p-0">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Product Keyword.." />
                            </div>

                            <div class="form-group">
                                <select class="custom-select">
                                    <option value="1" selected="">Choose Category</option>
                                    <option value="2">Men's Store</option>
                                    <option value="3">Women's Store</option>
                                    <option value="4">Kid's Fashion</option>
                                    <option value="5">Inner Wear</option>
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <button type="button" class="btn d-block full-width btn-dark">Search Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Cart -->
            <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
                <div class="rightMenu-scroll">
                    <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                        <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                        <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
                    </div>
                    <div class="right-ch-sideBar">
                        <div class="cart_select_items py-2">
                            <?php if($authCartItems != NULL): ?>
                            <?php $__currentLoopData = $authCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $authCartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('FrontEnd.Cart.cartWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="alert alert-warning">You have 0 items in your shopping cart.</div>
                            <?php endif; ?>
                        </div>
                        <?php if($authCartItems != NULL): ?>
                        <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                            <h6 class="mb-0">Subtotal</h6>
                            <h3 class="mb-0 ft-medium"><?php echo e(number_format($orderTotal)); ?> AED</h3>
                        </div>

                        <div class="cart_action px-3 py-3">
                            <div class="form-group">
                                <a href="<?php echo e(Route('checkout')); ?>" class="btn d-block full-width btn-dark">Checkout Now</a>
                            </div>
                            <div class="form-group">
                                <a href="<?php echo e(Route('cart')); ?>" class="btn d-block full-width btn-dark-light">Cart</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        </div>
        <?php echo $__env->yieldContent('productShow'); ?>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
      
        <script src="<?php echo e(asset('FrontEnd/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/ion.rangeSlider.min.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/slick.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/slider-bg.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/lightbox.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/smoothproducts.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/snackbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/jQuery.style.switcher.js')); ?>"></script>
        <script src="<?php echo e(asset('FrontEnd/js/custom.js')); ?>"></script>

        <script>
            function openCart() {
                document.getElementById("Cart").style.display = "block";
            }

            function closeCart() {
                document.getElementById("Cart").style.display = "none";
            }
        </script>

        <script>
            function openSearch() {
                document.getElementById("Search").style.display = "block";
            }

            function closeSearch() {
                document.getElementById("Search").style.display = "none";
            }
        </script>
        <script>
            $(document).ready(function () {
                $("body").on('change paste keyup', ".itemQty", (function () {
                    var $qty = $(this).val();
                    var $id = $(this).data('id');
                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                    });
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(Route('update-cart')); ?>",
                        data: {
                            id: $id,
                            qty: $qty
                        },
                        success: function (result) {
                        if (result && result?.status === "Cart Successfully Updated") {
                            location.reload();
                        }},
                        error: function (result) {
                            console.log("error", result);
                        },
                    });
                }));
            });
        </script>
       
        <?php echo $__env->yieldContent('javascripts'); ?>
    </body>
</html><?php /**PATH D:\Projects\laplain.ae\resources\views/FrontEnd/app.blade.php ENDPATH**/ ?>