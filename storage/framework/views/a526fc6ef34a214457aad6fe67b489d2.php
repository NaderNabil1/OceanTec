<?php $__env->startSection('title'); ?><?php echo e($task->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('tasks')); ?>">Tasks</a></li>
                        <li class="breadcrumb-item active"><?php echo e($task->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prd_details">
                    <div class="prt_01 mb-2"><span class="text-success bg-light-success rounded px-2 py-1"><?php echo e($task->title); ?></span></div>
                        <div class="prt_02 mb-3">
                            <h2 class="ft-bold mb-1"><?php echo e($task->title); ?></h2>
                            <div class="text-left">
                                <div class="elis_rty">
                                    <?php if($task->manager != '' ): ?>
                                    <span class="ft-bold fs-lg mr-2 text-dark">Manager :  <?php echo e($task->Manager->first_name . ' ' .  $task->Manager->last_name); ?></span>
                                    <?php endif; ?>
                                    <?php if($task->status=='Completed'): ?>
                                    <span class="ft-regular text-light bg-success py-1 px-2 fs-sm">Completed</span>
                                    <?php else: ?>
                                    <span class="ft-regular text-light bg-danger py-1 px-2 fs-sm">In Progress</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <div class="prt_03 mb-4">
                        <?php echo e($task->description); ?>

                    </div>
                    <div class="prt_04 mb-4">
                        <?php if($task->start_date != ''): ?><p class="d-flex align-items-center mb-1">Start Date:<strong class="fs-sm text-dark ft-medium ml-1"><?php echo e($task->start_date); ?></strong></p><?php endif; ?>
                        <?php if($task->end_date != ''): ?><p class="d-flex align-items-center mb-0">End Date:<strong class="fs-sm text-dark ft-medium ml-1"><?php echo e($task->end_date); ?></strong></p><?php endif; ?>
                    </div>
                    <form class="addtocart col-md-12" method="post" >
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e($task->status == "Pending" ? 'selected' : ''); ?> value="Pending">Pending</option>
                                        <option <?php echo e($task->status == "Completed" ? 'selected' : ''); ?> value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <button type="submit" class="btn btn-block custom-height bg-dark mb-2 width-modfied">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\SoftXpert\resources\views/FrontEnd/Task/show.blade.php ENDPATH**/ ?>