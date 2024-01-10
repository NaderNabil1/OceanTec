<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Title -->
        <title><?php echo $__env->yieldContent('title'); ?> - Soft Xpert</title>

        <!-- Vendor CSS -->

        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/themify-icons/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/animate.css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/jscrollpane/jquery.jscrollpane.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/waves/waves.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/switchery/dist/switchery.min.css')); ?>">

        <!-- Neptune CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('BackEnd/css/core.css')); ?>">
        <?php echo $__env->yieldContent('stylesheets'); ?>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="large-sidebar fixed-sidebar fixed-header">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Sidebar -->
            <div class="site-sidebar-overlay"></div>
            <div class="site-sidebar">
                <a class="logo" href="<?php echo e(Route('home')); ?>">
                    <img src="<?php echo e(asset('FrontEnd/img/logo2.png')); ?>" alt="Logo" style="width:100%" />
                </a>
                <div class="custom-scroll custom-scroll-light">
                    <ul class="sidebar-menu">
                        <li class="menu-title m-t-0-5">Managers Area</li>
                        <li <?php if(Route::current()->getName() == 'dashboard'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(Route('dashboard')); ?>" class="waves-effect waves-light">
                                <span class="s-icon"><i class="ti-dashboard"></i></span>
                                <span class="s-text">Dashboard</span>
                            </a>
                        </li>
                        <li <?php if(Route::current()->getName() == 'manager'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(Route('be-managers')); ?>" class="waves-effect waves-light">
                                <span class="s-icon"><i class="ti-crown"></i></span>
                                <span class="s-text">Managers</span>
                            </a>
                        </li>

                        <li class="menu-title m-t-0-5">Lists</li>
                        <li <?php if(Route::current()->getName() == 'tasks' || Route::current()->getName() == 'add-task' || Route::current()->getName() == 'edit-task'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(Route('be-tasks')); ?>" class="waves-effect waves-light">
                                <span class="s-icon"><i class="ti-flag-alt-2"></i></span>
                                <span class="s-text">Tasks</span>
                            </a>
                        </li>

                        <li <?php if(Route::current()->getName() == 'users' || Route::current()->getName() == 'add-user' || Route::current()->getName() == 'edit-user'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(Route('users')); ?>" class="waves-effect waves-light">
                                <span class="s-icon"><i class="ti-user"></i></span>
                                <span class="s-text">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(Route('home')); ?>" class="waves-effect waves-light">
                                <span class="s-icon"><i class="ti-world"></i></span>
                                <span class="s-text">Back To Website</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Header -->
            <div class="site-header">
                <nav class="navbar navbar-light">
                    <ul class="nav navbar-nav">
                        <li class="nav-item m-r-1 hidden-lg-up">
                            <a class="nav-link collapse-button" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-xs-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" data-toggle="dropdown" aria-expanded="false">
                                <div class="avatar box-32">
                                    <img src="<?php echo e(asset('BackEnd/img/avatars/2.png')); ?>" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <?php if(auth()->check()): ?>
                                <a class="dropdown-item" href="<?php echo e(Route('edit-user', $auth_user)); ?>">
                                    <i class="ti-user m-r-0-5"></i> Edit Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="post" action="<?php echo e(Route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item" type="submit"><i class="ti-power-off m-r-0-5"></i> Sign out</button>
                                </form>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="site-content">
                <!-- Content -->

                <?php echo $__env->yieldContent('content'); ?>

                <!-- Footer -->
               
            </div>

        </div>

        <!-- Vendor JS -->
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/jquery/jquery-1.12.3.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/tether/js/tether.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/detectmobilebrowser/detectmobilebrowser.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/jscrollpane/jquery.mousewheel.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/jscrollpane/mwheelIntent.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/jscrollpane/jquery.jscrollpane.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/waves/waves.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/switchery/dist/switchery.min.js')); ?>"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/js/app.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('BackEnd/js/demo.js')); ?>"></script>
        <?php echo $__env->yieldContent('javascripts'); ?>
    </body>
</html>
<?php /**PATH E:\Nader\SoftXpert\resources\views/Dashboard/app.blade.php ENDPATH**/ ?>