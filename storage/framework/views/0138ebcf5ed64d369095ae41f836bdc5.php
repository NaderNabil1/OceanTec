<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Innovation Scope" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?> | Ocean Tec</title>
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
                                <img src="<?php echo e(asset('FrontEnd/img/logo.png')); ?>" class="logo edited" alt="OceanTec" />
                            </a>
                            <div class="nav-toggle"></div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li <?php if(Route::current()->getName() == 'home'): ?> active <?php endif; ?>><a href="<?php echo e(Route('home')); ?>">الرئيسية</a></li>
                                <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="lvl1 <?php if($menuCategories->Count() > 0): ?>  <?php endif; ?>">
                                    <a href="<?php echo e(Route('products', $menuCategory->slug)); ?>"><?php echo e($menuCategory->title); ?> </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <?php if(Auth::User() && Auth::User()->role == 'Admin' ): ?>
                                <li><a href="<?php echo e(route('dashboard')); ?>" target="_blank">لوحة التحكم</a></li>
                                <?php endif; ?>
                                <?php if(Auth::user()): ?>
                                <li><a href="<?php echo e(Route('edit-account')); ?>">حسابي</a></li>
                                <?php else: ?>
                                <li><a href="<?php echo e(route('login')); ?>" data-target="#login">تسجيل الدخول</a></li>
                                <?php endif; ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->yieldContent('productShow'); ?>
      
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
</html><?php /**PATH E:\Nader\OceanTec\resources\views/FrontEnd/app.blade.php ENDPATH**/ ?>