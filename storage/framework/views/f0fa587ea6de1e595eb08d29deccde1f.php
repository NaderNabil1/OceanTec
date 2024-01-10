<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Innovation Scope" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?> | La Plain</title>
        <link href="<?php echo e(asset('FrontEnd/css/styles.css')); ?>" rel="stylesheet">
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
                                    <li><a href="#" onclick="openSearch()"><i class="lni lni-search-alt"></i></a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#login"><i class="lni lni-user"></i></a></li>
                                    <li><a href="#" onclick="openCart()"><i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">New Collection</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">On Sale</a></li>
                                <li><a href="#">Seasonal</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li><a href="#" onclick="openSearch()"><i class="lni lni-search-alt"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#login"><i class="lni lni-user"></i></a></li>
                                <li><a href="#" onclick="openCart()"><i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span></a></li>
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

                                    <div class="address mt-3">
                                        3298 Grant Street Longview, TX<br>United Kingdom 75601	
                                    </div>
                                    <div class="address mt-3">
                                        Dubai<br>United Arab Emirates	
                                    </div>
                                    <div class="address mt-3">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Supports</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">About Page</a></li>
                                        <li><a href="#">Size Guide</a></li>
                                        <li><a href="#">Shipping & Returns</a></li>
                                        <li><a href="#">FAQ's Page</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Shop</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Men's Shopping</a></li>
                                        <li><a href="#">Women's Shopping</a></li>
                                        <li><a href="#">Kids's Shopping</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Discounts</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Company</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Login</a></li>
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
                                        <div class="scr_payment"><img src="<?php echo e(asset('FrontEnd/img/card.png')); ?>" class="img-fluid" alt="" /></div>
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

            <!-- Log In Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
                <div class="modal-dialog modal-xl login-pop-form" role="document">
                    <div class="modal-content" id="loginmodal">
                        <div class="modal-headers">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>

                        <div class="modal-body p-5">
                            <div class="text-center mb-4">
                                <h2 class="m-0 ft-regular">Login</h2>
                            </div>

                            <form>				
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="Username*">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password*">
                                </div>

                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="flex-1">
                                            <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                            <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                        </div>	
                                        <div class="eltio_k2">
                                            <a href="#">Lost Your Password?</a>
                                        </div>	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                                </div>

                                <div class="form-group text-center mb-0">
                                    <p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

            <!-- Search -->
            <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
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

                    <div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
                        <h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
                    </div>

                    <div class="cart_action px-3 py-3">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/tshirt.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/pant.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/fashion.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/sneakers.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/television.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                                <div class="cats_side_wrap text-center">
                                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="assets/img/accessories.png" class="img-fluid" width="40" alt="" /></a></div></div>
                                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
                                </div>
                            </div>
                        </div>
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
                            <!-- Single Item -->
                            <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                                <div class="cart_single d-flex align-items-center">
                                    <div class="cart_selected_single_thumb">
                                        <a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                        <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                        <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                    </div>
                                </div>
                                <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                            </div>

                            <!-- Single Item -->
                            <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                                <div class="cart_single d-flex align-items-center">
                                    <div class="cart_selected_single_thumb">
                                        <a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
                                        <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                        <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                    </div>
                                </div>
                                <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                            </div>

                            <!-- Single Item -->
                            <div class="d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cart_single d-flex align-items-center">
                                    <div class="cart_selected_single_thumb">
                                        <a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                        <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
                                        <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                                    </div>
                                </div>
                                <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                            </div>

                        </div>

                        <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                            <h6 class="mb-0">Subtotal</h6>
                            <h3 class="mb-0 ft-medium">$1023</h3>
                        </div>

                        <div class="cart_action px-3 py-3">
                            <div class="form-group">
                                <button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                            </div>
                        </div>

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
        <?php echo $__env->yieldContent('javascripts'); ?>
    </body>
</html>









                                    <?php if($phone->value != ''): ?><p class="phone-no float-start"><i class="icon an an-phone me-1"></i><a href="tel:<?php echo e($phone->value); ?>"><?php echo e($phone->value); ?></a></p><?php endif; ?>
                                            <?php if($facebook->value != ''): ?><li><a class="social-icons__link" href="<?php echo e($facebook->value); ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="icon an an-facebook"></i> <span class="icon__fallback-text">Facebook</span></a></li><?php endif; ?>
                                            <?php if($instagram->value != ''): ?><li><a class="social-icons__link" href="<?php echo e($instagram->value); ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li><?php endif; ?>
                                            <?php if($youtube->value != ''): ?><li><a class="social-icons__link" href="<?php echo e($youtube->value); ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="YouTube"><i class="icon icon an an-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li><?php endif; ?>
                                            <?php if($tiktok->value != ''): ?><li><a class="social-icons__link" href="<?php echo e($tiktok->value); ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="YouTube"><i class="icon an an-facebook"></i> <span class="icon__fallback-text">Tiktok</span></a></li><?php endif; ?>

                                            <?php echo $__env->make('FrontEnd.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            
                                            
                                                <?php if(Auth::user()): ?>
                                                <li class="item"><a href="<?php echo e(route('my-account')); ?>">Account</a></li>
                                                <li class="item"><a href="<?php echo e(Route('orders')); ?>">Orders</a></li>
                                                <form method="post" action="<?php echo e(Route('logout')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <button class="dropdown-item" type="submit"><i class="ti-power-off m-r-0-5"></i> Logout</button>
                                                </form>
                                                <?php else: ?>
                                                <li class="item"><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                                <li class="item"><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                                <?php endif; ?>
                                                
                                                
                                                
                                            <a href="<?php echo e(Route('cart')); ?>" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                                                <i class="icon an an-shopping-bag"></i><span id="CartCount" class="site-header__cart-count"><?php if(Auth::user()): ?> <?php echo e($authCartItems->Count()); ?> <?php else: ?> <?php if($authCartItems != NULL): ?> <?php echo e(count($authCartItems)); ?> <?php else: ?> 0 <?php endif; ?> <?php endif; ?></span>
                                            </a>
                            
                                                
                                                
                                                <h4 class="modal-title" id="myModalLabel2">Shopping Cart <strong><?php if(Auth::user()): ?> <?php echo e($authCartItems->Count()); ?> <?php else: ?> <?php if($authCartItems != NULL): ?> <?php echo e(count($authCartItems)); ?> <?php else: ?> 0 <?php endif; ?> <?php endif; ?></strong> items</h4>

                                                
                                                
                            <?php if($authCartItems == NULL): ?>
                                <p>You have 0 items in your shopping cart.</p>
                            <?php else: ?>
                            <div id="drawer-minicart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <?php $__currentLoopData = $authCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $authCartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('FrontEnd.Cart.cartWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if($authCartItems != NULL): ?>
                        <div class="minicart-footer minicart-action">
                            <div class="total-in">
                                <p class="label"><b>Subtotal:</b><span class="item product-price"><span class="money"><?php echo e($orderTotal); ?> EGP</span></span></p>
                            </div>
                            <div class="buttonSet d-flex flex-row align-items-center text-center">
                                <a href="<?php echo e(Route('cart')); ?>" class="btn btn-secondary w-50 me-3">View Cart</a>
                                <a href="<?php echo e(Route('checkout')); ?>" class="btn btn-secondary w-50">Checkout</a>
                            </div>
                        </div>
                        <?php endif; ?>
                
                
<?php /**PATH E:\laragon\www\laplain.ae\resources\views/FrontEnd/app.blade.php ENDPATH**/ ?>