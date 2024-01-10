<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
    <div class="d-block border rounded mfliud-bot">
        <div class="dashboard_author px-2 py-5">
            <div class="dash_caption">
                <h4 class="fs-md ft-medium mb-0 lh-1"><?php echo e(Auth::User()->first_name . ' ' . Auth::User()->last_name); ?></h4>
            </div>
        </div>

        <div class="dashboard_author">
            <h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</h4>
            <ul class="dahs_navbar" role="tablist">
                <li><a class="nav-link <?php if(Route::current()->getName() == 'edit-account'): ?> active <?php endif; ?>" href="<?php echo e(Route('edit-account')); ?>"><i class="lni lni-user mr-2"></i> Edit Account details</a></li>
                <li><a class="nav-link <?php if(Route::current()->getName() == 'orders' || Route::current()->getName() == 'show-order'): ?> active <?php endif; ?>" href="<?php echo e(Route('orders')); ?>"><i class="lni lni-shopping-basket mr-2"></i> Orders</a></li>
                <li><a class="nav-link <?php if(Route::current()->getName() == 'addresses' || Route::current()->getName() == 'add-address' || Route::current()->getName() == 'edit-address'): ?> active <?php endif; ?>" href="<?php echo e(Route('addresses')); ?>"><i class="lni lni-map-marker mr-2"></i> Addresses</a></li>
                <li><a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="lni lni-power-switch mr-2"></i> logout</a></li>
            </ul>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"><?php echo csrf_field(); ?></form>
        </div>

    </div>
</div>


<?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Account/sidebar.blade.php ENDPATH**/ ?>