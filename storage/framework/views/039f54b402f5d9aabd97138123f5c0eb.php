<?php $__env->startSection('title', 'Blog'); ?>

<?php $__env->startSection('content'); ?>
<h1>Blog</h1>

<?php if($blogs->Count() > 0): ?>
<ul>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($blog->image); ?>" width="50px" alt="<?php echo e($blog->title); ?>">
    <a href="<?php echo e(Route('show-blog', $blog->slug)); ?>"><li><?php echo e($blog->title); ?></li></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php else: ?>
<p>No blogs available.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Blog/index.blade.php ENDPATH**/ ?>