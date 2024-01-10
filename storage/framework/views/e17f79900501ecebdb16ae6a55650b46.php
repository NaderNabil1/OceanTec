<?php $__env->startSection('title', 'My account'); ?>

<?php $__env->startSection('content'); ?>
<div class="page section-header text-center mb-0">
    <div class="page-title">
        <div class="wrapper"><h1 class="page-width">My Account</h1></div>
    </div>
</div>
<!-- End Page Title -->
<div class="bredcrumbWrap bredcrumbWrapPage bredcrumb-style2 text-center">
    <div class="container breadcrumbs">
        <a href="<?php echo e(url('/')); ?>" title="Back to the home page">Home</a><span aria-hidden="true">|</span><span class="title-bold">My Account</span>
    </div>
</div>

<div class="container">
    <div class="dashboard-upper-info">
        <div class="row align-items-center g-0">
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="d-single-info">
                    <p class="user-name">Hello <span class="font-weight-600"><?php echo e(Auth::User()->first_name . ' ' . Auth::User()->last_name); ?></span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="d-single-info">
                    <p>Need Assistance? Customer service at.</p>
                    <p>customercare@marinaazer.com.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="d-single-info">
                    <p>E-mail them at </p>
                    <p>support@marinaazer.com</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-6">
                <div class="d-single-info text-lg-center">
                    <a class="view-cart" href="<?php echo e(route('cart')); ?>"><i class="icon an an-shopping-bag me-1"></i>View Cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4 mb-lg-5 pb-lg-5">
        <div class="col-xl-3 col-lg-3 col-md-12 md-margin-20px-bottom">
            
        </div>

        <div class="col-xs-9 col-lg-9 col-md-12">
            <!-- Tab panes -->
            <div class="tab-content dashboard-content padding-30px-all md-padding-15px-all" style="">
                <!-- Dashboard -->
                <div id="dashboard" class="tab-pane fade active show">
                    <h3>Dashboard </h3>
                    <p>From your account dashboard. you can easily check &amp; view your
                        <a class="text-decoration-underline" href="#">recent orders</a>, manage your
                        <a class="text-decoration-underline" href="#">shipping and billing addresses</a> and
                        <a class="text-decoration-underline" href="#">edit your password and account details.</a>
                    </p>
                    <div class="row user-profile mt-4">
                        <div class="col-12 col-lg-6">
                            <div class="profile-img">
                                <div class="detail ms-3">
                                    <h5 class="mb-1"><?php echo e(Auth::User()->first_name . ' ' . Auth::User()->last_name); ?></h5>
                                    <?php echo e(Auth::User()->email); ?>

                                    <!--<p>Balance: <strong>$500</strong></p>-->
                                </div>
                                <!--<div class="lbl">SILVER USER</div>-->
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="profile-order mt-3 mt-lg-0">
                                <li>
                                    <h3 class="mb-1">16</h3>
                                    All Orders
                                </li>
                                <li>
                                    <h3 class="mb-1">01</h3>
                                    Awaiting Delivery
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Account/myAccount.blade.php ENDPATH**/ ?>