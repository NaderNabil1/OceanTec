<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Innovation Scope" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?> | Soft Xpert</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                            <a class="nav-brand" href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(asset('FrontEnd/img/logo2.png')); ?>" class="logo edited" alt="SoftXpert" />
                            </a>
                            <div class="nav-toggle"></div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li <?php if(Route::current()->getName() == 'home'): ?> active <?php endif; ?>><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                                <?php if(Auth::User()): ?>
                                <li <?php if(Route::current()->getName() == 'tasks'): ?> active <?php endif; ?>><a href="<?php echo e(Route('tasks')); ?>">My Tasks</a></li>
                                <?php endif; ?>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <?php if(Auth::User() && Auth::User()->role == 'Manager' ): ?>
                                <li><a href="<?php echo e(route('dashboard')); ?>" target="_blank">Managers Dashboard</a></li>
                                <?php endif; ?>
                                <?php if(Auth::user()): ?>
                                <li><a href="<?php echo e(Route('edit-account')); ?>">Edit account</a></li>
                                <?php else: ?>
                                <li><a href="<?php echo e(route('login')); ?>" data-target="#login">Login</a></li>
                                <?php endif; ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php echo $__env->yieldContent('content'); ?>
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

       
        <?php echo $__env->yieldContent('javascripts'); ?>
    </body>
</html><?php /**PATH E:\Nader\SoftXpert\resources\views/FrontEnd/app.blade.php ENDPATH**/ ?>