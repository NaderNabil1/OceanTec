<?php $__env->startSection('title', 'Events'); ?>

<?php $__env->startSection('content'); ?>
<h1>Events</h1>

<?php if($events->Count() > 0): ?>
<ul>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(Route('show-event', $event->slug)); ?>"><li><?php echo e($event->title); ?></li></a>
    <?php if($event->image != NULL): ?>
    <a href="<?php echo e(Route('show-event', $event->slug)); ?>"><img src="<?php echo e(url('/uploads')); ?>/<?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>" width="100px" /></a>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php else: ?>
<p>No events available.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Event/index.blade.php ENDPATH**/ ?>