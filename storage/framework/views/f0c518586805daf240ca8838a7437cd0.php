<?php $__env->startSection('title', 'My account'); ?>

<?php $__env->startSection('content'); ?>

<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div>
            </nav>

            <h1>My Account</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">My account</h2>
                        </div>

                        <form action="<?php echo e(Route('edit-account')); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First name</label>
                                        <input type="text" class="form-input form-wide" id="first_name" name="first_name" required readonly placeholder="Enter your first name" value="<?php echo e($user->first_name); ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Last name</label>
                                        <input type="text" class="form-input form-wide" id="last_name" name="last_name" required readonly placeholder="Enter your last name" value="<?php echo e($user->last_name); ?>"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                        <input type="email" class="form-input form-wide" id="email" name="email" required readonly placeholder="Enter your email" value="<?php echo e($user->email); ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                        <input type="text" class="form-input form-wide" id="phone" name="phone" required readonly placeholder="Enter your phone" value="<?php echo e($user->phone); ?>"/>
                                </div>
                            </div>

                            <div class="form-footer mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                    Edit account
                                </button>
                            </div>
                        </form>
                        <div class="form-footer mb-2">
                            <a href="<?php echo e(Route('addresses')); ?>" type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                Shipping addresses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Account/myAccount.blade.php ENDPATH**/ ?>