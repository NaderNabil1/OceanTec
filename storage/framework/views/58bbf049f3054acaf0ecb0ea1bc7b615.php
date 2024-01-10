<?php $__env->startSection('title', 'Edit address' . $address->title); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('addresses')); ?>">My Addresses</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Address <?php echo e($address->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <?php echo $__env->make('FrontEnd.Account.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12 col-md-12 mb-3">
                            <h4 class="ft-medium fs-lg">Edit Address <?php echo e($address->title); ?></h4>
                        </div>
                    </div>

                    <div class="row mb-2">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Address title (Office / Home / Etc...) *</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo e($shippingAddress->title); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">First Name *</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo e($shippingAddress->first_name); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Last Name *</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo e($shippingAddress->last_name); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Email *</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e($shippingAddress->email); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Phone *</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Phone" value="<?php echo e($shippingAddress->phone); ?>">
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Address *</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo e($shippingAddress->address); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Country *</label>
                                <select class="custom-select" name="country" id="country">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($shippingAddress->country == $country->id ? 'selected' : ''); ?> value="<?php echo e($country->id); ?>"><?php echo e($country->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">City *</label>
                                <select class="custom-select" name="city" id="city">
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($shippingAddress->city == $city->id ? 'selected' : ''); ?> value="<?php echo e($city->id); ?>"><?php echo e($city->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Area</label>
                                <input type="text" name="area" class="form-control" placeholder="Area" value="<?php echo e($shippingAddress->area); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Street Name</label>
                                <input type="text" name="street_name" class="form-control" placeholder="Street Name" value="<?php echo e($shippingAddress->street_name); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Landmark</label>
                                <input type="text" name="landmark" class="form-control" placeholder="Landmark" value="<?php echo e($shippingAddress->landmark); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Building Number</label>
                                <input type="text" name="building_number" class="form-control" placeholder="Building Number" value="<?php echo e($shippingAddress->building_number); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Floor</label>
                                <input type="text" name="floor" class="form-control" placeholder="Floor" value="<?php echo e($shippingAddress->floor); ?>">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-dark full-width">Update Address</button>
                            </div>
                        </div>	

                    </div>				

                </form>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script>
    $(document).ready(function(){
        $('#country').change(function(){
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            const countryId = $(this).val();
            $.ajax({
                type: "Get",
                url: "<?php echo e(Route('get-cities')); ?>",
                data: {
                    countryId: countryId,
                },
                success: function (result) {
                if (result && result?.status === "success") {
                    $('#city').empty();
                    if(result?.data == ''){
                        $('#city').prop("disabled", true);
                    } else {
                        for (const element of result?.data) {
                            var $name = element['id'];
                            var $shippingfees = element['shipping_price'];
                            $('#city').append('<option value="' + $name + '">' + element['title'] + '</option>');
                         }
                        $('#city').prop("disabled", false);
                        var $shippingfees = $($("#country option:selected")).data('shippingfees');
                        var $total = <?php echo e($orderTotal); ?>;
                        $('#shippingCalculated').empty().append($shippingfees);
                        $('#totalOrder').empty().append($shippingfees + $total);
                        $('#totalInput').val($shippingfees + $total);
                        $('#totalSubmit').empty().append($shippingfees + $total);
                    }
                }},
                error: function (result) {
                    console.log("error", result);
                },
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/ShippingAddress/editAddress.blade.php ENDPATH**/ ?>