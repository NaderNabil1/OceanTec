<?php $__env->startSection('title', 'Add testimonial'); ?>

<?php $__env->startSection('content'); ?>
<h2>Add testimonial</h2>

<form method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Enter your name"><br>

    <label for="position">Position</label>
    <input type="text" name="position" placeholder="Enter your position"><br>

    <label for="image">Image</label>
    <input type="file" name="image"><br>

    <label for="description">Message</label>
    <textarea name="description" cols="30" rows="2" placeholder="Enter your position"></textarea><br>

    <button type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Testimonial/add.blade.php ENDPATH**/ ?>