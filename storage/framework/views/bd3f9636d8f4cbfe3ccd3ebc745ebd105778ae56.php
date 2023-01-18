

<?php $__env->startSection('title'); ?>
   My Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details
                                    <a href="<?php echo e(url('my-orders')); ?>" class="btn btn-warning text-white float-end">Back</a>
                                </h4>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border"><?php echo e($orders->name); ?></div>
                                <label for="">Last Name</label>
                                <div class="border"><?php echo e($orders->lname); ?></div>
                                <label for="">Email</label>
                                <div class="border"><?php echo e($orders->email); ?></div>
                                <label for="">Contacto No.</label>
                                <div class="border"><?php echo e($orders->phone); ?></div>
                                <label for="">Shipping Address</label>
                                <div class="border">
                                    <?php echo e($orders->address1); ?>, <br>
                                    <?php echo e($orders->address2); ?>, <br>
                                    <?php echo e($orders->city); ?>, <br>
                                    <?php echo e($orders->state); ?>,
                                    <?php echo e($orders->country); ?>,
                                </div>
                                <label for="">Zip Code</label>
                                <div class="border"><?php echo e($orders->pincode); ?></div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orders->orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($item->products->name); ?></td>
                                                <td><?php echo e($item->qty); ?></td>
                                                <td><?php echo e($item->price); ?></td>
                                                <td>
                                                    <img src=" <?php echo e(asset('assets/uploads/poduct/'.$item->products->image)); ?>" width="50px" alt="Product Image">
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total:<span class="float-end"> $<?php echo e($orders->total_price); ?> </span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/orders/view.blade.php ENDPATH**/ ?>