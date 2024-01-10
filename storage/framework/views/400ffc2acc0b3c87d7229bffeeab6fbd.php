<?php $__env->startSection('title', 'Edit order'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit order</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(Route('be-orders')); ?>">All orders</a></li>
            <li class="breadcrumb-item active">Edit order</li>
        </ol>
        
        <div class="card">
            <div class="card-header clearfix">
                <h5 class="pull-xs-left m-b-0">Order #<?php echo e($order->id); ?></h5>
                <div class="pull-xs-right"><?php echo e($order->created_at); ?></div>
            </div>
            <form method="post" id="form">
                <?php echo csrf_field(); ?>
                <div class="card-block">
                    <div class="row m-b-2">
                        <div class="col-sm-8 col-xs-6">
                            <h5><?php echo e($order->User->first_name . ' ' . $order->User->last_name); ?>,</h5>
                            <p>
                                <?php if($order->user != '3'): ?>
                                    <?php echo e($order->User->phone); ?> <br/> <?php echo e($order->User->email); ?> <br/> <?php echo e($order->ShippingAddress->City->title); ?>

                                <?php else: ?> 
                                    <?php echo e($order->ShippingAddress->phone); ?> <br/> <?php echo e($order->ShippingAddress->email); ?> <br/> <?php echo e($order->ShippingAddress->city != '' ? $order->ShippingAddress->City->title : ''); ?>

                                <?php endif; ?>
                            </p>
                            <p><?php echo e($order->status); ?></p>
                            <?php if($order->status != 'Failure'): ?>
                            <div class="row">
                                <div class="col-md-3 col-xs-12">
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option <?php echo e($order->status == 'Success' ? 'selected' : ''); ?> value="Success">Success</option>
                                            <option <?php echo e($order->status == 'In progress' ? 'selected' : ''); ?> value="In progress">In progress</option>
                                            <option <?php echo e($order->status == 'Canceled' ? 'selected' : ''); ?> value="Canceled">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <h5>Payment & Shipping Details:</h5>
                            <?php if($order->paymentMethod != ''): ?>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">Payment Method:</span>
                                <span class="pull-xs-right"><?php echo e($order->PaymentMethod->title); ?></span>
                            </div>
                            <?php endif; ?>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">Address Title:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->title); ?></span>
                            </div>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">City:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->city != '' ? $order->ShippingAddress->City->title : ''); ?></span>
                            </div>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">User:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->first_name); ?> - <?php echo e($order->ShippingAddress->last_name); ?></span>
                            </div>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">Address:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->address); ?> <?php if($order->ShippingAddress->street_name != ''): ?> - <?php echo e($order->ShippingAddress->street_name); ?> <?php endif; ?> <?php if($order->ShippingAddress->building_number != ''): ?> - <?php echo e($order->ShippingAddress->building_number); ?> <?php endif; ?> </span>
                            </div>
                            <div class="clearfix m-b-0-25">
                                <span class="pull-xs-left">Phone:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->phone); ?></span>
                            </div>
                            <div class="clearfix">
                                <span class="pull-xs-left">Email:</span>
                                <span class="pull-xs-right"><?php echo e($order->ShippingAddress->email); ?></span>
                            </div>
                        </div>

                    </div>

                    <table class="table table-bordered table-striped m-b-2">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order_item->id); ?></td>
                                <td><?php echo e($order_item->Product->title); ?></td>
                                <td>
                                    <?php if($order_item->old_price != NULL && $order_item->old_price > 0): ?> 
                                    <del><small><?php echo e(number_format($order_item->old_price)); ?> EGP</small></del> <span class="text-danger"><strong><?php echo e(number_format($order_item->price)); ?> EGP </strong></span>
                                    <?php else: ?> 
                                    <?php echo e(number_format($order_item->price)); ?> EGP 
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($order_item->size == '8'): ?> <a href='#!' data-toggle="modal" data-target="#modal-<?php echo e($order_item->id); ?>"> <?php endif; ?> 
                                        <?php echo e($order_item->Size->title); ?> 
                                    <?php if($order_item->size == '8'): ?> </a> 
                                        <div class="modal fade large-modal" id='modal-<?php echo e($order_item->id); ?>' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Custom Size Data</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo e($order_item->custom_size); ?> 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                
                                </td>
                                <td><?php echo e($order_item->qty); ?></td>
                                <td>
                                    <?php if($order_item->total_old_price != NULL && $order_item->total_old_price > 0): ?> 
                                    <del><small><?php echo e(number_format($order_item->total_old_price)); ?> EGP</small></del> <span class="text-danger"><strong><?php echo e(number_format($order_item->total_price)); ?> EGP </strong></span>
                                    <?php else: ?> 
                                    <?php echo e(number_format($order_item->total_price)); ?> EGP 
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php if($order->orderComment != ''): ?>
                            <strong>Order Notes</strong>
                            <p class="text-muted m-b-0"><?php echo e($order->orderComment); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-xs-right">
                                <div class="m-b-0-5">Sub - Total amount: 
                                    <?php if($order->old_price != NULL && $order->old_price > 0): ?> 
                                    <b><?php echo e(number_format($orderItemsOldTotal) . ' EGP'); ?></b>
                                    <?php else: ?>
                                    <b><?php echo e(number_format($orderItemsTotal) . ' EGP'); ?></b>
                                    <?php endif; ?>
                                </div>
                                <div class="m-b-0-5">Shipping: <?php echo e(number_format($order->shipping_price) . ' EGP'); ?></div>
                                
                                <?php if($order->discount != NULL && $order->discount > 0): ?> 
                                <div class="m-b-0-5">Discount: <span class="text-danger">(-<?php echo e(number_format($discount) . ' EGP'); ?>)</span></div>
                                <?php endif; ?>
                                
                                <?php if($order->first_order_discount != NULL && $order->first_order_discount > 0): ?> 
                                <div class="m-b-0-5">First Order 5% Discount: 
                                    <span class="text-danger">
                                        (-<?php echo e(number_format($order->first_order_discount) . ' EGP'); ?>)
                                    </span>
                                </div>
                                <?php endif; ?>
                                
                                Grand Total: 
                                <?php if($order->old_price != NULL && $order->old_price > 0): ?> 
                                <del><small><?php echo e(number_format($order->old_price)); ?> EGP</small></del> <span class="text-success"><strong><?php echo e(number_format($order->price)); ?> EGP </strong></span>
                                <?php else: ?> 
                                <strong><?php echo e(number_format($order->price) . ' EGP'); ?></strong>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Order log</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Description</th>
                                            <th>Created by</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $order_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($log->description); ?></td>
                                            <?php if($order->user != '3'): ?>
                                            <td><?php echo e($log->Creator->first_name . ' ' . $log->Creator->last_name); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e($order->ShippingAddress->first_name); ?>  <?php echo e($order->ShippingAddress->last_name); ?></td>
                                            <?php endif; ?>
                                            <td><?php echo e($log->created_at); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="3">
                                                <textarea name="description" rows="2" id="description" class="form-control" placeholder="Enter description"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Update</button>
        </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\laplain.ae\resources\views/BackEnd/Order/edit.blade.php ENDPATH**/ ?>