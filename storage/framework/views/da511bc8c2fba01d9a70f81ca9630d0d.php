<li class="lvl1 <?php if(Route::current()->getName() == 'home'): ?> active <?php endif; ?>"><a href="<?php echo e(url('/')); ?>">Home</a></li>
<li class="lvl1 <?php if(Route::current()->getName() == 'categories'): ?> active <?php endif; ?>"><a href="<?php echo e(Route('categories')); ?>">Collections</a></li>

<li class="lvl1  <?php if(Route::current()->getName() == 'blog' || Route::current()->getName() == 'show-blog'): ?> active <?php endif; ?>"><a href="<?php echo e(Route('blog')); ?>">Blog</a></li>
<li class="lvl1  <?php if(Route::current()->getName() == 'events' || Route::current()->getName() == 'show-event'): ?> active <?php endif; ?>"><a href="<?php echo e(Route('events')); ?>">Events</a></li>
<?php /**PATH E:\laragon\www\laplain.ae\resources\views/FrontEnd/menu.blade.php ENDPATH**/ ?>