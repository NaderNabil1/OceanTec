<li class="lvl1 <?php if(Route::current()->getName() == 'home'): ?> active <?php endif; ?>"><a href="<?php echo e(route('home')); ?>">Home</a></li>
<?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="lvl1 <?php if($menuCategory->Count() > 0): ?>  <?php endif; ?>">
    <a href="<?php echo e(Route('products', $mainCategory->slug)); ?>"><?php echo e($menuCategory->title); ?> <?php if($menuCategory->subs->Count() > 0): ?> <i class="an an-angle-down"></i> <?php endif; ?></a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<li class="lvl1 <?php if(Route::current()->getName() == 'about'): ?> active <?php endif; ?>"><a href="<?php echo e(Route('about')); ?>">About</a></li><?php /**PATH E:\Nader\OceanTec\resources\views/FrontEnd/menu.blade.php ENDPATH**/ ?>