

<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"> 
                <a href="<?php echo e(url('/')); ?>">
                    Home
                </a> /
                <a href="<?php echo e(url('checkout')); ?>">
                    Checkout
                </a>
            </h6>
        </div>
    </div>

    <div class="container mt-3">
        <form action="<?php echo e(url('place-order')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="f">First Name</label>
                                <input type="text" required class="form-control firstname" value="<?php echo e(Auth::user()->name); ?>" name="fname" placeholder="Enter First Name">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="f">Last Name</label>
                                <input type="text" required class="form-control lastname" value="<?php echo e(Auth::user()->lname); ?>" name="lname" placeholder="Enter Last Name">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Email</label>
                                <input type="text"  required class="form-control email" value="<?php echo e(Auth::user()->email); ?>" name="email" placeholder="Enter Email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Phone Number</label>
                                <input type="text" required class="form-control phone" value="<?php echo e(Auth::user()->phone); ?>" name="phone" placeholder="Enter Phone Number">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Address 1</label>
                                <input type="text" required class="form-control address1" value="<?php echo e(Auth::user()->address1); ?>" name="address1" placeholder="Enter Address 1">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Address 2</label>
                                <input type="text" required class="form-control address2" value="<?php echo e(Auth::user()->address2); ?>" name="address2" placeholder="Enter Address 2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">City</label>
                                <input type="text" required class="form-control city" value="<?php echo e(Auth::user()->city); ?>" name="city" placeholder="Enter City">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">State</label>
                                <input type="text" required class="form-control state" value="<?php echo e(Auth::user()->state); ?>" name="state" placeholder="Enter State">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Country</label>
                                <input type="text" required class="form-control country" value="<?php echo e(Auth::user()->country); ?>" name="country" placeholder="Enter County">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="f">Pin Code</label>
                                <input type="text" required class="form-control pincode" value="<?php echo e(Auth::user()->pincode); ?>" name="pincode" placeholder="Enter Pin Code">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        <?php if($old_cartitems->count() > 0): ?>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0; ?>
                                    <?php $__currentLoopData = $old_cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php $total += ($item->products->selling_price * $item->prod_qty) ?>
                                        <td><?php echo e($item->products->name); ?></td>
                                        <td><?php echo e($item->prod_qty); ?></td>
                                        <td><?php echo e($item->products->selling_price); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                            </table>
                            <h6 class="px-2">Grand Total <span class="float-end"> € <?php echo e($total); ?></span></h6>
                            <hr>
                            <button type="submit" class="btn btn-success w-100 ">Place Order</button>
                            
                            <!--<button type = "submit" href="<?php echo e(url('/stripe')); ?>" class="btn btn-primary w-100 pay_btn mt-3">Pay</button>-->

                            <button type="submit" class="btn btn-outline-success">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="<?php echo e(env('STRIPE_KEY')); ?>"
                                data-name="Payment of <?php echo e($total); ?>€" data-amount="<?php echo e($total * 100); ?>"
                                data-currency="EUR"
                                data-description="Insert your card information"></script>
                            </button>
                            
                        <?php else: ?>
                            <h4 class="text-center">No products in cart</h4>
                        <?php endif; ?>    
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>