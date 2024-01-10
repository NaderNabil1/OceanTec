<?php $__env->startSection('title', 'Shipping & checkout'); ?>

<?php $__env->startSection('content'); ?>
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('cart')); ?>">Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center d-block mb-5">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($alert != 0): ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                <div class="alert alert-danger">There is some products in you cart out of stock, Please Update your Cart Quantities to Place your Order.</div>
            </div>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                <div class="customer-box returning-customer">
                    <a href="#!" id="customer" class="text-white" data-bs-toggle="collapse"><h3 class="d-block"><i class="icon an an-user"></i> Returning customer? Click here to login</h3></a>
                    <div id="customer-login" class="d-none customer-content">
                        <div class="customer-info">
                            <p class="coupon-text mb-3">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form method="post" id="form" action="<?php echo e(Route('checkout-login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="loginEmail">Email address <span class="required-f">*</span></label>
                                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="loginEmail">
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="loginPassword">Password <span class="required-f">*</span></label>
                                        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="loginPassword">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="form-check d-flex justify-content-between ps-0">
                                            <div class="customCheckbox">
                                                <input type="checkbox" name="remember" class="form-check-input" id="remember" value="1" />
                                                <label for="remember"> Remember me!</label>
                                            </div>
                                            <a href="<?php echo e(route('password.request')); ?>" class="ml-3 float-end">Forgot your password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <form method="post" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form" class="require-validation">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 col-md-12">
                    <h5 class="mb-4 ft-medium">Shipping Details</h5>
                    <?php if(Auth::user() && $addresses->Count() > 0): ?>
                    <div class="card card--grey">
                        <div class="card-body">
                            <h2 class="pb-1">My Addresses</h2>
                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="customRadio clearfix">
                                <input type="radio" class="radio shippingAddress" id="shippingAddress_<?php echo e($address->id); ?>" name="shippingAddress" value="<?php echo e($address->id); ?>" data-shippingfees="<?php echo e(number_format($address->City->shipping_price)); ?>" <?php echo e($key == '0' ? 'checked' : ''); ?>> 
                                <label for="shippingAddress_<?php echo e($address->id); ?>"><?php echo e($address->title); ?></label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="customRadio clearfix">
                                <input name="shippingAddress" id="newShippingAddress" value="new" type="radio" class="radio" <?php if(auth()->guard()->guest()): ?> checked="" <?php endif; ?>> 
                                <label for="newShippingAddress">Add New Shipping Address</label>
                            </div>

                        </div>
                    </div>
                    <?php else: ?>
                        <input name="shippingAddress" value="new"  type="hidden" class="radio" <?php if(auth()->guard()->guest()): ?> checked="" <?php endif; ?>> 
                    <?php endif; ?>
                    
                    <div class="mb-2" id="newAddress" <?php if(Auth::user() && $addresses->Count() > 0): ?> style="display: none;" <?php endif; ?>>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Address type (e.g. Home - Work ....)</label>
                                    <input class="form-control" name="title" id="title" type="text" placeholder="Enter address type" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">First Name *</label>
                                    <input name="first_name" placeholder="Enter first name" id="first_name" type="text" <?php if(Auth::user()): ?> value="<?php echo e(Auth::User()->first_name); ?>" <?php endif; ?> class="form-control"" />
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Last Name *</label>
                                    <input name="last_name" placeholder="Enter last name" id="last_name" class="form-control" type="text" <?php if(Auth::user()): ?> value="<?php echo e(Auth::User()->last_name); ?>" <?php endif; ?>>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Email *</label>
                                    <input name="email" class="form-control" placeholder="Enter email" id="email" type="email" <?php if(Auth::user()): ?> value="<?php echo e(Auth::User()->email); ?>" <?php endif; ?>>
                                </div>
                            </div>

                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Phone *</label>
                                    <input placeholder="Enter Phone" id="phone" class="form-control" type="tel" name="phone" <?php if(Auth::user()): ?> value="<?php echo e(Auth::User()->phone); ?>" <?php endif; ?>>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Address *</label>
                                    <input class="form-control" name="address" id="address" type="text" placeholder="Enter address" />
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Country *</label>
                                    <select class="custom-select" name="country" id='country'>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option data-shippingfees='<?php echo e(number_format($country->shipping_price)); ?>' value="<?php echo e($country->id); ?>" <?php echo e($key == 0 ? 'selected' : ''); ?> ><?php echo e($country->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">City / Town *</label>
                                    <select class="custom-select" name="city" id='city'>
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->Id); ?>" <?php echo e($key == 0 ? 'selected' : ''); ?> ><?php echo e($city->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Order Notes</label>
                                    <textarea class="form-control ht-50" name="orderComment"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                    <div class="row mb-4">
                        <div class="col-12 d-block">
                            <input id="create_account" class="checkbox-custom" name="create_account" type="checkbox">
                            <label for="create_account" class="checkbox-custom-label">Create An Account?</label>
                        </div>
                        <div id="collapseThree" class="col-12 d-none">
                            <div class="form-group">
                                <label>Password<abbr class="required" title="required">*</abbr></label>
                                <input type="password" placeholder="Password" name="guest_password" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <h5 class="mb-4 ft-medium">Payments</h5>
                    <div class="row mb-4">
                        <div class="col-12 col-lg-12 col-xl-12 col-md-12">
                            <div class="panel-group pay_opy980" id="payaccordion">
                                <div class="panel panel-default credit-card-box">
                                <?php $__currentLoopData = $payment_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="panel panel-default border">
                                    <div class="panel-heading" id="stripes">
                                        <h4 class="panel-title">
                                            <a href="#!" aria-expanded="true" id="pay"><?php echo e($method->title); ?></a>
                                        </h4>
                                    </div>
                                    <input type="hidden" value="<?php echo e($method->id); ?>" name="payment_method"/>
                                    <div id="stripePay" aria-labelledby="stripes" data-parent="#payaccordion">
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="text-dark">Card Holder Name *</label>
                                                        <input type="text" name="card_holder_name" class="form-control" placeholder="Dhananjay Preet" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group required">
                                                        <label class="text-dark">Card Number *</label>
                                                        <input type="text" autocomplete='off' class='form-control card-number' size='20' />
                                                    </div>
                                                </div>									
                                            </div>
                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> 
                                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> 
                                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label> 
                                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                </div>
                                            </div>

                                            <div class='row'>
                                                <div class="col-lg-12 col-md-126 col-sm-12">
                                                    <div class="form-group">
                                                        <input id="ak-2" class="checkbox-custom" name="ak-2" type="checkbox">
                                                        <label for="ak-2" class="checkbox-custom-label">By Continuing, you ar'e agree to conditions</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-dark full-width">Pay <span id="totalSubmit"><?php echo e(number_format($orderTotal + $selectedShippingAddressPrice)); ?></span> AED</button>
                            </div>
                        </div>
                    </div>

                </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="d-block mb-3">
                        <h5 class="mb-4">Order Items (<?php if(Auth::user()): ?> <?php echo e($authCartItems->Count()); ?> <?php else: ?> <?php if($authCartItems != NULL): ?> <?php echo e(count($authCartItems)); ?> <?php else: ?> 0 <?php endif; ?> <?php endif; ?>)</h5>
                        <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
                            <?php if($authCartItems != ''): ?>
                                <?php $__currentLoopData = $authCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth::User()): ?>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <!-- Image -->
                                            <a href="<?php echo e(Route('product-details', ['slug' => $item->Product->Category->slug, 'prodSlug' => $item->Product->slug])); ?>">
                                                <?php if($item->Product->image != NULL): ?>
                                                <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($item->Product->image); ?>" alt="<?php echo e($item->Product->title); ?>" class="img-fluid">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div class="cart_single_caption pl-2">
                                                <h4 class="product_title fs-md ft-medium mb-1 lh-1"><?php echo e($item->Product->title); ?></h4>
                                                <p class="mb-1 lh-1"><span class="text-dark">Size: <?php echo e($item->Size->title); ?></span></p>
                                                <h4 class="fs-md ft-medium mb-3 lh-1"><?php if($item->Product->sale_price != NULL && $item->Product->sale_end_date > now()): ?> <?php echo e(number_format($item->Product->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($item->Product->price)); ?> AED <?php endif; ?> * <?php echo e($item->qty); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php else: ?>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <!-- Image -->
                                            <a href="<?php echo e(Route('product-details', ['slug' => $item['product']->Category->slug, 'prodSlug' => $item['product']->slug])); ?>">
                                                <?php if($item['product']->image != NULL): ?>
                                                <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($item['product']->image); ?>" alt="<?php echo e($item['product']->title); ?>" class="img-fluid">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div class="cart_single_caption pl-2">
                                                <h4 class="product_title fs-md ft-medium mb-1 lh-1"><?php echo e($item['product']->title); ?></h4>
                                                <p class="mb-1 lh-1"><span class="text-dark">Size: <?php echo e($item['size']->title); ?></span></p>
                                                <h4 class="fs-md ft-medium mb-3 lh-1"><?php if($item['product']->sale_price != NULL && $item['product']->sale_end_date > now()): ?> <?php echo e(number_format($item['product']->sale_price)); ?> AED <?php else: ?> <?php echo e(number_format($item['product']->price)); ?> AED <?php endif; ?> * <?php echo e($item['qty']); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <div class="card mb-4 gray">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Subtotal</span> <span class="ml-auto text-dark ft-medium"><?php echo e(number_format($orderTotal)); ?> AED</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Shipping</span> <span class="ml-auto text-dark ft-medium"><span id="shippingCalculated"><?php echo e(number_format($selectedShippingAddressPrice)); ?></span> AED</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Total</span> <span class="ml-auto text-dark ft-medium"><span id="totalOrder"><?php echo e(number_format($orderTotal + $selectedShippingAddressPrice)); ?></span> AED</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#!" id="placeOrder" class="btn btn-block btn-dark mb-3">Place Your Order</a>
                </div>
            </div>
            <input type="hidden" id="qtyInput" value="<?php echo e($productQty); ?>" name="qty"/>
            <input type="hidden" id="totalInput" value="<?php echo e($orderTotal + $selectedShippingAddressPrice); ?>" name="total_order"/>
        </form>
    </div>
</section>
<!--            <?php $__currentLoopData = $payment_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="radio" class="radio" id="payment_method_<?php echo e($method->id); ?>" name="payment_method" value="<?php echo e($method->id); ?>">
            <label for="payment_method_<?php echo e($method->id); ?>"><?php echo e($method->title); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
   
    var $form = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>


<script>
    $(document).ready(function(){
        $('body').on('click', '#customer', (function(){
            $('#customer-login').toggleClass('d-none');
        }));
        $('body').on('change', '#create_account', (function(){
            if ($(this).prop("checked")) {
                $('#collapseThree').removeClass('d-none');
            } else {
                $('#collapseThree').addClass('d-none');
            }
        }));
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
        $('#newShippingAddress').click(function(){
            $('#newAddress').stop().slideDown();
            $("#title, #first_name, #last_name, #phone, #address").prop('required', true);
            var $total = <?php echo e($orderTotal); ?>;
            $('#shippingCalculated').empty().append(0);
            $('#totalOrder').empty().append($total);
            $('#totalInput').val($total);
            $('#totalSubmit').empty().append($total);
        });
        $('input.shippingAddress').click(function(){
            $('#newAddress').stop().slideUp();
            $("#title, #first_name, #last_name, #phone, #address").prop('required', false);
            var $shippingfees = $(this).data('shippingfees');
            var $total = <?php echo e($orderTotal); ?>;
            $('#shippingCalculated').empty().append($shippingfees);
            $('#totalOrder').empty().append($shippingfees + $total);
            $('#totalInput').val($shippingfees + $total);
            $('#totalSubmit').empty().append($shippingfees + $total);
        });
        $('#newShippingAddress').click(function(){
            $('#newAddress').stop().slideDown();
            var $shippingfees = $('#city option:selected').data('shippingfees');
            var $total = <?php echo e($orderTotal); ?>;
            $('#shippingCalculated').empty().append($shippingfees);
            $('#totalOrder').empty().append($shippingfees + $total);
            $('#totalInput').val($shippingfees + $total);
            $('#totalSubmit').empty().append($shippingfees + $total);
        });
        $('input.shippingAddress').click(function(){
            $('#newAddress').stop().slideUp();
        });
        $('#placeOrder').click(function(){
            $('#checkout').submit();
        });
    });
</script>



<script src="<?php echo e(asset('FrontEnd/vendor/jquery-validate/jquery.validate.min.js')); ?>"></script>

<script>
$(document).ready(function() {
    $("#form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            },   
        },
        messages: {
            email: {
                required: "please enter your email",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter a password",
            },
        },

    submitHandler: function (form) {

        $(form).submit();
    }
    });

    $("#payment-form").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15  
            },
            address: {
                required: true
            },
            country: {
                required: true
            },
            city: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            }, 
            card_holder_name: {
                required: true,
                lettersOnly: true
            },
            card_number: {
                required: true,
                digits: true,
            },
            expire_month: {
                required: true,
            },
            expire_year: {
                required: true,
            },
            cvc: {
                required: true,
            }
        },
        messages: {
            first_name: {
                required: "Please enter your first-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            last_name: {
                required: "Please enter your last-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            email: {
                required: "please enter your email",
                email: "Please enter a valid email address"
            },
            phone: {
                required: "Please enter your phone number",
                digits: "Please enter only digits",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
            address: {
                required: "Please enter your address"
            },
            country: {
                required: "Please select a country"
            },
            country: {
                required: "Please select a city"
            },
            password: {
                required: "Please enter a password",
                minlength: "Your password must be at least 8 characters long"
            },
            card_holder_name: {
                required: "Please enter the card holder name",
                lettersOnly: "Only alphabetic characters are allowed"
            }, 
            card_number: {
                required: "Please enter the card number",
                digits: "Please enter only digits",
            },
            expire_month: {
                required: "Please select the expire month",
            },
            expire_year: {
                required: "Please select the expire year",
            },
            cvc: {
                required: "Please enter the cvc",
            },
        },

    submitHandler: function (form) {

        $(form).submit();
    }
    });
});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('FrontEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laplain.ae\resources\views/FrontEnd/Cart/checkout.blade.php ENDPATH**/ ?>