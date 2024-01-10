<?php $__env->startSection('title'); ?><?php echo e($blog->title); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($blog->title); ?></h1>

<?php if($blog->image != NULL): ?>
<img src="<?php echo e(url('/uploads')); ?>/<?php echo e($blog->image); ?>" alt="<?php echo e($blog->title); ?>" width="100px" />
<?php endif; ?>

<p><?php echo $blog->description; ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Blog/show.blade.php ENDPATH**/ ?>