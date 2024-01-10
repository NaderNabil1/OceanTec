<?php $__env->startSection('title'); ?>Tasks <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-3 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" ><a href="<?php echo e(Route('home')); ?>" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Tasks</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php if($tasks->Count() > 0): ?>
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="<?php echo e(route('show-task', $task->slug)); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">
          <?php echo e($task->title); ?>

        </div>
        <?php if($task->status =='Completed'): ?>
        <div class="ag-courses-item_title status-succes">
          <?php echo e($task->status); ?>

        </div>
        <?php else: ?>
        <div class="ag-courses-item_title status">
          <?php echo e($task->status); ?>

        </div>
        <?php endif; ?>
        <?php if($task->start_date!=''): ?>
        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            <?php echo e($task->start_date); ?>

          </span>
        </div>
        <?php endif; ?>
        <?php if($task->end_date!=''): ?>
        <div class="ag-courses-item_date-box">
          Ends:
          <span class="ag-courses-item_date">
            <?php echo e($task->end_date); ?>

          </span>
        </div>
        <?php endif; ?>
      </a>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="ag-courses-item_title">
          No Tasks available for you ! 
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\SoftXpert\resources\views/FrontEnd/Task/tasks.blade.php ENDPATH**/ ?>