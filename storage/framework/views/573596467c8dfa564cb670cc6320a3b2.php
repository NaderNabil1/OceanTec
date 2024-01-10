<?php $__env->startSection('title'); ?><?php echo e($page->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Contact Page Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Contact Us</h2>
                    <h3 class="ft-bold pt-3">Get In Touch</h3>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-between">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card-wrap-body mb-4">
                    <h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
                    <?php if($address->value != ''): ?><p><?php echo e($address->value); ?></p><?php endif; ?>
                    <?php if($email->value != ''): ?><p class="lh-1"><span class="text-dark ft-medium">Email:</span> <?php echo e($email->value); ?></p><?php endif; ?>
                </div>

                <div class="card-wrap-body mb-3">
                    <h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
                    <h6 class="ft-medium mb-1">Customer Care:</h6>
                    <?php if($phone->value != ''): ?><p class="mb-2"><?php echo e($phone->value); ?></p><?php endif; ?>
                </div>

                <div class="card-wrap-body mb-3">
                    <h4 class="ft-medium mb-3 theme-cl">Follow us</h4>
                    <?php if($facebook->value != ''): ?><a class="lh-1 text-dark" href="<?php echo e($facebook->value); ?>" target="_blank"><i class="lni lni-facebook"></i> </a><?php endif; ?>
                    <?php if($instagram->value != ''): ?><a class="lh-1 text-dark" href="<?php echo e($instagram->value); ?>" target="_blank"><i class="lni lni-instagram"></i> </a><?php endif; ?>
                    <?php if($youtube->value != ''): ?><a class="lh-1 text-dark" href="<?php echo e($youtube->value); ?>" target="_blank"><i class="lni lni-youtube"></i> </a><?php endif; ?>
                </div>
            </div>

            <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
                <?php endif; ?>
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Your Name *</label>
                                <input type="text" name="name" class="form-control" value="Your Name">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Your Email *</label>
                                <input type="text" name="email" class="form-control" value="Your Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Subject</label>
                                <input type="text" name="phone" class="form-control" value="Add Your phone">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Subject</label>
                                <input type="text" name="subject" class="form-control" value="Type Your Subject">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Message</label>
                                <textarea class="form-control ht-80" name="message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-dark">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7232.871923856152!2d55.175477!3d24.985298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f728ca5ad27d1%3A0x83f8b86e6a48c938!2sSchon%20Business%20Park!5e0!3m2!1sen!2sae!4v1697907719789!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Page/contact.blade.php ENDPATH**/ ?>