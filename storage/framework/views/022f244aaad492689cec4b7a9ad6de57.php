<?php $__env->startSection('title', 'Edit account'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <?php echo $__env->make('FrontEnd.Account.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <!-- row -->
                <div class="row align-items-center">
                    <form method="POST" class="row m-0">
                        <?php echo csrf_field(); ?>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">First Name *</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo e($user->first_name); ?>" required/>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Last Name *</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo e($user->last_name); ?>" required/>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Email *</label>
                                <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" required/>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Phone *</label>
                                <input type="email" name="tel" name="phone" class="form-control" value="<?php echo e($user->phone); ?>" required/>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Save Changes</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- row -->
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script src="<?php echo e(asset('FrontEnd/vendor/jquery-validate/jquery.validate.min.js')); ?>"></script>

<script>
$(document).ready(function() {
    $("#create-account").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15,   
            },
        },
        messages: {
            first_name: {
                required: "Please enter your first-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            last_name: {
                required: "Please enter your last-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            email: {
                required: "please enter your email",
                email: "Please enter a valid email address"
            },
            phone: {
                required: "Please enter your phone number",
                digits: "Please enter only digits",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
        },

    submitHandler: function (form) {

        $(form).submit();
    }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\laplain.ae\resources\views/FrontEnd/Account/editAccount.blade.php ENDPATH**/ ?>