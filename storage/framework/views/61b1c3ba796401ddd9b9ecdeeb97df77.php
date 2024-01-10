<?php $__env->startSection('title', 'Edit user'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit user</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('users')); ?>">Users</a></li>
            <li class="breadcrumb-item active">Edit user</li>
        </ol>

        <div class="box box-block bg-white">
            <form method="post" id="form">
            <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">First name</label>
                            <input name="first_name" type="text" class="form-control" placeholder="Enter first name" value="<?php echo e($user->first_name ?? ''); ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Last name</label>
                            <input name="last_name" type="text" class="form-control" placeholder="Enter last name" value="<?php echo e($user->last_name); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter email"  value="<?php echo e($user->email); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input name="phone" type="tel" class="form-control" placeholder="Enter phone"  value="<?php echo e($user->phone); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Role</label>
                            <select class="form-control" name="role" id="">
                                <option value="">Please select user role</option>
                                <option <?php echo e($user->role == 'Admin' ? 'selected' : ''); ?> value="Admin">Admin</option>
                                <option <?php echo e($user->role == 'Client' ? 'selected' : ''); ?> value="Client">Client</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Password</label><br>
                            <a href="<?php echo e(Route('password.request')); ?>" class="btn btn-danger w-min-sm m-b-0-25 waves-effect waves-light">Reset password</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" class="custom-control-input" <?php echo e($user->status == 'Active' ? 'checked' : ''); ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Active</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/js/jquery.validate.js')); ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#form').validate({
            rules: {
                first_name: { required: true },
                last_name: { required: true },
                email: { required: true },
                phone: { required: true },
                role: { required: true },
            },
            messages: {
                first_name: { required: "First name is required" },
                last_name: { required: "Last name is required" },
                email: { required: "Email is required" },
                phone: { "Phone is required" },
                role: { required: "Role is required" },
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/BackEnd/User/edit.blade.php ENDPATH**/ ?>