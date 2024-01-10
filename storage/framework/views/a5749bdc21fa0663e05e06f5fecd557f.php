<?php $__env->startSection('title'); ?><?php echo e($event->title); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($event->title); ?></h1>

<?php if($event->image != NULL): ?>
<img src="<?php echo e(url('/uploads')); ?>/<?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>" width="100px" />
<?php endif; ?>

<p><?php echo $event->description; ?></p>

<?php if($gallery->Count() > 0): ?>
<h3>Gallery</h3>
<?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(url('/uploads')); ?>/<?php echo e($item->path); ?>" alt="<?php echo e($event->title); ?>" width="75px" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if($event->video != NULL): ?>
<h3>Video</h3>
<a href="<?php echo e($event->video); ?>" target="blank"><?php echo e($event->video); ?></a>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Event/show.blade.php ENDPATH**/ ?>